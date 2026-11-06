<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Concerns\FollowUpWizard;
use App\Models\Demographicprofile;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * Renders the pages of Forms 2-4 (guarded and pre-filled), and handles
 * editing and deleting saved entries. The POST handlers stay in
 * Form2Controller / Form3Controller / Form4Controller.
 */
class FollowUpFormController extends Controller
{
    use LogsActivity, FollowUpWizard;

    public const CANCER_SITES = [
        'Adrenal', 'Anus', 'Biliary Tract',
        'Blood - Acute Lymphocytic Leukemia', 'Blood - Acute Myelogenous Leukemia',
        'Blood - Chronic Lymphocytic Leukemia', 'Blood - Chronic Myelogenous Leukemia',
        'Blood - Myelodysplastic Syndromes', 'Blood - Plasma Cell Disorders',
        'Bone', 'Brain (CNS)', 'Breast', 'Cervix', 'Colon', 'Esophagus', 'Eyes and Orbit',
        'Gallbladder', 'Gastroesophageal Junction', 'Hodgkin Lymphoma', 'Hypopharynx',
        'Kaposi Sarcoma', 'Kidney', 'Larynx', 'Leukemia', 'Lip/Oral Cavity', 'Liver', 'Lung',
        'Melanoma of Skin', 'Mesothelioma', 'Multiple Myeloma', 'Nasopharynx',
        'Non-Hodgkin Lymphoma', 'Oral Cavity', 'Oropharynx', 'Ovary', 'Pancreas',
        'Paranasal Sinus', 'Peritoneal', 'Prostate', 'Rectum', 'Renal Pelvis/Ureters',
        'Salivary Glands', 'Skin', 'Small Bowel', 'Soft Tissue Sarcoma', 'Spinal Cord',
        'Stomach', 'Testis', 'Thymus', 'Thyroid', 'Unknown Primary (Occult Primary)',
        'Urinary Bladder', 'Uterus', 'Vagina', 'Vulva',
    ];

    public function page(Request $request, string $form, int $page)
    {
        $cfg = $this->fuConfig($form);
        abort_unless(isset($cfg['pages'][$page]), 404);

        if ($page === 1) {
            $patient = $this->fuPatient($request->query('hospitalID'));
            $entry = $this->fuEntry($form);

            if ($request->boolean('new')) {
                // "New" from the patient's record: stop editing, and resume an unfinished draft instead of creating a duplicate.
                Session::forget([$cfg['session'], $cfg['session'] . '_edit']);
                $entry = $cfg['parent']::where('hospitalID', $patient->hospitalID)->where('status', 0)->latest('id')->first();
                if ($entry) {
                    Session::put($cfg['session'], $entry->getKey());
                    Session::now('info', "An unfinished {$cfg['label']} entry for this patient was found and has been reopened.");
                }
            } elseif ($entry && $entry->hospitalID !== $patient->hospitalID) {
                Session::forget([$cfg['session'], $cfg['session'] . '_edit']);
                $entry = null;
            }

            $this->prefill($entry ? $entry->toArray() : $this->defaultsFromForm1($patient));
        } else {
            $entry = $this->fuRequireEntry($form);
            $patient = Demographicprofile::where('hospitalID', $entry->hospitalID)->where('status', 1)->first();
            $values = [];
            foreach ($cfg['pages'][$page]['relations'] as $relation) {
                $values += optional($entry->{$relation})->toArray() ?? [];
            }
            $this->prefill($values);
        }

        $editing = $this->fuIsEditing($form, $entry);

        return view($cfg['pages'][$page]['view'], [
            'mode'       => $editing ? 'edit' : 'create',
            'record'     => $patient,
            'entry'      => $entry,
            'formAction' => $page === 1 ? route($this->storeRoute($form), ['hospitalID' => $patient->hospitalID]) : null,
            'wizard'     => $this->wizardFor($form, $page, $entry, $patient),
            'exitUrl'    => $patient ? route('view.forms', ['id' => $patient->id]) : route('admin.records'),
        ]);
    }

    public function edit(string $form, int $id, int $page = 1)
    {
        $cfg = $this->fuConfig($form);
        abort_unless(isset($cfg['pages'][$page]), 404);
        $entry = $cfg['parent']::findOrFail($id);

        Session::put($cfg['session'], $entry->getKey());
        Session::put($cfg['session'] . '_edit', $entry->getKey());

        return redirect()->to($this->pageUrl($form, $page, $entry->hospitalID));
    }

    public function destroy(string $form, int $id)
    {
        $cfg = $this->fuConfig($form);
        $entry = $cfg['parent']::findOrFail($id);

        DB::transaction(function () use ($cfg, $entry) {
            foreach ($cfg['pages'] as $p) {
                foreach ($p['relations'] as $relation) {
                    $entry->{$relation}()->delete();
                }
            }
            $entry->delete();
        });

        if ((int) Session::get($cfg['session']) === (int) $id) {
            Session::forget([$cfg['session'], $cfg['session'] . '_edit']);
        }

        $this->logActivity('delete', "Deleted {$cfg['label']} entry #{$id} for Hospital ID: {$entry->hospitalID}", null, [
            'table' => $entry->getTable(), 'record_id' => $id, 'hospitalID' => $entry->hospitalID,
        ]);

        return back()->with('success', "{$cfg['label']} entry deleted.");
    }

    /** Printable form. Returns 404 for unknown ids; pages never saved render as blanks instead of crashing. */
    public function print(Request $request)
    {
        // Read by name: Laravel passes route parameters positionally, and Form 2's {id} precedes the "form" default.
        $form = (string) $request->route('form');
        $cfg = $this->fuConfig($form);
        $id = $request->route('id') ?? $request->query('id');
        abort_unless(is_numeric($id), 404);

        $relations = collect($cfg['pages'])->pluck('relations')->flatten()->all();
        $data = $cfg['parent']::with($relations)->findOrFail($id);

        foreach ($relations as $relation) {
            if ($data->{$relation} === null) {
                $data->setRelation($relation, $data->{$relation}()->getRelated()->newInstance());
            }
        }

        // Make sure array-cast columns used by the print templates are arrays, never null
        foreach (['name', 'primary_cancer_site', 'stage', 'other_staging', 'reason', 'setting'] as $attr) {
            if (array_key_exists($attr, $data->getCasts()) && $data->{$attr} === null) {
                $data->{$attr} = [];
            }
        }
        $data->name = array_merge(['firstname' => '', 'middlename' => '', 'lastname' => '', 'suffix' => ''], (array) $data->name);

        return view("forms.{$form}.form", ['data' => $data]);
    }

    /* ------------------------------------------------------------------ */

    private function storeRoute(string $form): string
    {
        return ['form2' => 'submit.follow-up', 'form3' => 'store.f3patientsurveillanceforms', 'form4' => 'store.palliative-form'][$form];
    }

    private function pageUrl(string $form, int $page, string $hospitalID): string
    {
        $route = $this->fuConfig($form)['pages'][$page]['route'];
        return $page === 1 ? route($route, ['hospitalID' => $hospitalID]) : route($route);
    }

    /** Stepper data for the layout. */
    private function wizardFor(string $form, int $page, $entry, $patient): array
    {
        $cfg = $this->fuConfig($form);
        $steps = [];
        foreach ($cfg['pages'] as $n => $p) {
            $saved = $entry && ($n === 1 || collect($p['relations'])->contains(fn ($r) => $entry->{$r} !== null));
            $steps[$n] = [
                'label' => $p['label'],
                'saved' => $saved,
                // Saved pages (and page 1) can be revisited once an entry exists
                'url'   => ($entry && ($saved || $n < $page) && $n !== $page && $patient)
                    ? $this->pageUrl($form, $n, $patient->hospitalID) : null,
            ];
        }

        return [
            'title'   => "{$cfg['label']} · {$cfg['title']}",
            'current' => $page,
            'steps'   => $steps,
        ];
    }

    /** Page 1 defaults taken from the patient's Form 1 record. */
    private function defaultsFromForm1(Demographicprofile $patient): array
    {
        $dx = $patient->cancerdiagnoses;

        return [
            'date' => now()->toDateString(),
            'name' => [
                'firstname'  => $patient->name['firstname'] ?? null,
                'middlename' => $patient->name['middlename'] ?? null,
                'lastname'   => $patient->name['lastname'] ?? null,
                'suffix'     => $patient->name['suffix'] ?? null,
            ],
            'primary_cancer_site'       => $dx->cancer_sites ?? [],
            'primary_cancer_site_other' => $dx->cancer_site_other ?? null,
            'laterality'                => $dx->laterality ?? null,
            'histologic_diagnosis'      => $dx->histologic_diagnosis ?? null,
            'icd10'                     => $dx->icd_10 ?? null,
            'clinical_stage'            => $dx->clinical_stage ?? null,
            'stage' => [
                't_stage' => $dx->t_stage ?? null,
                'n_stage' => $dx->n_stage ?? null,
                'm_stage' => $dx->m_stage ?? null,
                's_stage' => $dx->s_stage ?? null,
            ],
            'other_staging'             => $dx->other_staging ?? [],
            'other_remarks'             => $dx->other_remarks ?? null,
        ];
    }

    /** Expose saved values as "old input" for this request only (real old input wins). */
    private function prefill(array $values): void
    {
        if (!Session::hasOldInput()) {
            $clean = array_filter($values, fn ($v) => $v !== null);
            unset($clean['id'], $clean['code'], $clean['created_at'], $clean['updated_at'], $clean['status']);
            Session::now('_old_input', $clean);
        }
    }
}
