<?php

namespace App\Http\Controllers\Concerns;

use App\Models\Demographicprofile;
use App\Models\F2followup;
use App\Models\F3patientsurveillanceform;
use App\Models\F4palliativeform;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Session;

/**
 * Shared plumbing for the multi-page Forms 2-4.
 *
 * Each form keeps its in-progress entry in its OWN session key (f2_code,
 * f3_code, f4_code) so it can never collide with Form 1 ("code") or with
 * another follow-up form. "{key}_edit" marks that the entry is being edited
 * (saving a page then returns to the entry list instead of the next page).
 */
trait FollowUpWizard
{
    public static function followUpForms(): array
    {
        return [
            'form2' => [
                'number' => 2, 'label' => 'Form 2', 'title' => 'Follow-up', 'session' => 'f2_code', 'parent' => F2followup::class,
                'pages' => [
                    1 => ['route' => 'form2-firstpage',  'view' => 'forms.form2.follow-up',                      'label' => 'Follow-up',          'relations' => []],
                    2 => ['route' => 'form2-secondpage', 'view' => 'forms.form2.patient-eco-status',             'label' => 'ECOG & Status',      'relations' => ['f2patientstatuses']],
                    3 => ['route' => 'form2-thirdpage',  'view' => 'forms.form2.radio-theranotics',              'label' => 'Radiotherapy',       'relations' => ['f2radiotheraphies']],
                    4 => ['route' => 'form2.fourthpage', 'view' => 'forms.form2.other-cancer-directed-thyrapies', 'label' => 'Other Therapies',   'relations' => ['f2othercancertherapies']],
                    5 => ['route' => 'form2.fifthpage',  'view' => 'forms.form2.change-treatment-plan',          'label' => 'Treatment Plan',     'relations' => ['f2changetreatmentplans']],
                    6 => ['route' => 'form2.sixpage',    'view' => 'forms.form2.cancer-diagnose-outcome',        'label' => 'Outcome',            'relations' => ['f2cancerdiagnoseoutcomes']],
                ],
            ],
            'form3' => [
                'number' => 3, 'label' => 'Form 3', 'title' => 'Surveillance', 'session' => 'f3_code', 'parent' => F3patientsurveillanceform::class,
                'pages' => [
                    1 => ['route' => 'form3-firstpage', 'view' => 'forms.form3.patient-surveillance-form',   'label' => 'Surveillance',       'relations' => []],
                    2 => ['route' => 'form3.secondpage', 'view' => 'forms.form3.cancer-diagnose-outcome',    'label' => 'Outcome',            'relations' => ['f3cancerdiagnoseoutcomes']],
                    3 => ['route' => 'form3.page3',     'view' => 'forms.form3.cancer-treatment-history',    'label' => 'Treatment History',  'relations' => ['f3cancertreatmenthistories', 'f3treatmenthistory2s']],
                    4 => ['route' => 'form3.page4',     'view' => 'forms.form3.financial-support-mechanism', 'label' => 'Financial Support',  'relations' => ['f3financialsupports']],
                ],
            ],
            'form4' => [
                'number' => 4, 'label' => 'Form 4', 'title' => 'Palliative Care', 'session' => 'f4_code', 'parent' => F4palliativeform::class,
                'pages' => [
                    1 => ['route' => 'form4-firstpage', 'view' => 'forms.form4.palliative-form',               'label' => 'Palliative Care',   'relations' => []],
                    2 => ['route' => 'form4.page2',     'view' => 'forms.form4.esas-r',                        'label' => 'ESAS-r',            'relations' => ['f4esas']],
                    3 => ['route' => 'form4.page3',     'view' => 'forms.form4.pain-assessment',               'label' => 'Pain Assessment',   'relations' => ['f4painassessments']],
                    4 => ['route' => 'form4.page4',     'view' => 'forms.form4.palliative-care-intervention',  'label' => 'Interventions',     'relations' => ['f4palliativecares']],
                    5 => ['route' => 'form4.page5',     'view' => 'forms.form4.cancer-diagnose-outcome',       'label' => 'Outcome',           'relations' => ['f4cancerdiagnoseoutcomes']],
                    6 => ['route' => 'form4.page6',     'view' => 'forms.form4.financial-support-mechanism',   'label' => 'Financial Support', 'relations' => ['f4financialsupportmechanisms']],
                ],
            ],
        ];
    }

    protected function fuConfig(string $form): array
    {
        $forms = static::followUpForms();
        abort_unless(isset($forms[$form]), 404);
        return $forms[$form];
    }

    /** The entry currently in progress for this form, or null. */
    protected function fuEntry(string $form): ?Model
    {
        $cfg = $this->fuConfig($form);
        $id = Session::get($cfg['session']);
        return $id ? $cfg['parent']::find($id) : null;
    }

    /** The entry in progress, or abort the request with a redirect to the records list. */
    protected function fuRequireEntry(string $form): Model
    {
        $entry = $this->fuEntry($form);
        if (!$entry) {
            $cfg = $this->fuConfig($form);
            throw new HttpResponseException(
                redirect()->route('admin.records')->with('error', "There is no {$cfg['label']} in progress (it may have expired). Open the patient's record and start again.")
            );
        }
        return $entry;
    }

    /** A patient with a completed Form 1, or abort with a redirect. */
    protected function fuPatient(?string $hospitalID): Demographicprofile
    {
        $patient = $hospitalID
            ? Demographicprofile::with('cancerdiagnoses')->where('hospitalID', $hospitalID)->where('status', 1)->first()
            : null;

        if (!$patient) {
            throw new HttpResponseException(
                redirect()->route('admin.records')->with('error', 'Patient not found, or their Form 1 record is not completed yet.')
            );
        }
        return $patient;
    }

    protected function fuIsEditing(string $form, ?Model $entry = null): bool
    {
        $cfg = $this->fuConfig($form);
        $editing = Session::get($cfg['session'] . '_edit');
        return $editing && (!$entry || (int) $editing === (int) $entry->getKey());
    }

    /** Save page 1 (creates the entry, or updates the open draft for the same patient). */
    protected function fuSaveFirstPage(string $form, string $hospitalID, array $data)
    {
        $cfg = $this->fuConfig($form);
        $patient = $this->fuPatient($hospitalID);

        $entry = $this->fuEntry($form);
        if ($entry && $entry->hospitalID !== $patient->hospitalID) {
            $entry = null;
        }

        $data['hospitalID'] = $patient->hospitalID;
        $data['primary_cancer_site'] = $data['primary_cancer_site'] ?? [];   // NOT NULL column; "Others" may be the only site

        if ($entry) {
            $entry->update($data);
            $this->logUpdate($entry, "Updated {$cfg['label']} ({$cfg['title']}) page 1 for Hospital ID: {$patient->hospitalID}");
        } else {
            $entry = $cfg['parent']::create($data);
            Session::forget($cfg['session'] . '_edit');
            $this->logCreate($entry, "Started {$cfg['label']} ({$cfg['title']}) for Hospital ID: {$patient->hospitalID}");
        }

        Session::put($cfg['session'], $entry->getKey());

        return $this->fuAfterSave($form, 1, $entry, "{$cfg['pages'][1]['label']} saved.");
    }

    /** Save a later page's model, keyed by the entry id. */
    protected function fuSavePage(string $form, int $page, string $modelClass, array $data, string $message)
    {
        $entry = $this->fuRequireEntry($form);
        $modelClass::updateOrCreate(['code' => $entry->getKey()], $data + ['code' => $entry->getKey()]);
        return $this->fuAfterSave($form, $page, $entry, $message);
    }

    /** Where to go after a page is saved. */
    protected function fuAfterSave(string $form, int $page, Model $entry, string $message)
    {
        $cfg = $this->fuConfig($form);
        $last = max(array_keys($cfg['pages']));

        if ($this->fuIsEditing($form, $entry)) {
            $this->logUpdate($entry, "Edited {$cfg['label']} page {$page} for Hospital ID: {$entry->hospitalID}");
            if ($page === $last || $entry->status == 1) {
                return redirect()->route('user.multiform', ['hospitalID' => $entry->hospitalID, 'form' => $cfg['number']])
                    ->with('success', "{$cfg['label']} entry updated: {$message}");
            }
        }

        if ($page >= $last) {
            return $this->fuComplete($form, $entry);
        }

        return to_route($cfg['pages'][$page + 1]['route'])->with('success', $message);
    }

    /** Mark the entry complete, clear the session, and return to the patient's record. */
    protected function fuComplete(string $form, Model $entry)
    {
        $cfg = $this->fuConfig($form);
        $entry->status = 1;
        $entry->save();

        $this->logActivity('create', "Completed {$cfg['label']} ({$cfg['title']}) for Hospital ID: {$entry->hospitalID}", $entry);

        Session::forget([$cfg['session'], $cfg['session'] . '_edit']);

        $patient = Demographicprofile::where('hospitalID', $entry->hospitalID)->where('status', 1)->first();
        $target = $patient ? route('view.forms', ['id' => $patient->id]) : route('admin.records');

        return redirect($target)->with('success', "{$cfg['label']} ({$cfg['title']}) was saved successfully!");
    }
}
