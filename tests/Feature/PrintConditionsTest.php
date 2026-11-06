<?php

/*
 * Guards the printable Forms 1-4 against drifting away from the input forms.
 *
 * Every checkbox on a print is ticked by a condition such as
 *   {{ $data->f2patientstatuses['ecog_grade'] == "Grade 1" ? 'checked' : 'unchecked' }}
 * This test renders the real input pages, collects the values each field can
 * actually submit, then extracts every such condition from the print views and
 * fails if a print tests a value that the matching input page can never save
 * (that box could never be ticked).
 */

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

/** Which input pages feed which relation of each print. */
const PRINT_SOURCES = [
    'form1' => [
        'view' => 'forms/form.blade.php',
        'relations' => [
            'riskfactors' => ['f1_riskfactor', 'f1_inc_exposure', 'f1_inc_family-history-cancer', 'f1_inc_cancer-sites', 'f1_inc_contraceptives'],
            'cancerdiagnoses' => ['f1_cancer'],
            'treatments' => ['f1_treatment'],
        ],
        'default' => ['f1_demographic'],
    ],
    'form2' => [
        'view' => 'forms/form2/form.blade.php',
        'relations' => [
            'f2patientstatuses' => ['f2_p2'], 'f2radiotheraphies' => ['f2_p3'], 'f2othercancertherapies' => ['f2_p4'],
            'f2changetreatmentplans' => ['f2_p5'], 'f2cancerdiagnoseoutcomes' => ['f2_p6'],
        ],
        'default' => ['f2_p1'],
    ],
    'form3' => [
        'view' => 'forms/form3/form.blade.php',
        'relations' => [
            'f3cancerdiagnoseoutcomes' => ['f3_p2'], 'f3cancertreatmenthistories' => ['f3_p3'], 'f3treatmenthistory2s' => ['f3_p3'],
            'f3financialsupports' => ['f3_p4'],
        ],
        'default' => ['f3_p1'],
    ],
    'form4' => [
        'view' => 'forms/form4/form.blade.php',
        'relations' => [
            'f4esas' => ['f4_p2'], 'f4painassessments' => ['f4_p3'], 'f4palliativecares' => ['f4_p4'],
            'f4cancerdiagnoseoutcomes' => ['f4_p5'], 'f4financialsupportmechanisms' => ['f4_p6'],
        ],
        'default' => ['f4_p1'],
    ],
];

const PC_REF = '(\$[A-Za-z_]\w*(?:\s*(?:->\s*\w+|\[\s*["\']?[\w\s]+["\']?\s*\]))*)';
const PC_LIT = '["\']([^"\'$]*)["\']';

/** Render every input page of Forms 1-4 and return [pageKey => html]. */
function renderInputPages($test): array
{
    config(['database.connections.sqlsrv' => ['driver' => 'sqlite', 'database' => ':memory:', 'prefix' => '']]);
    $test->actingAs(User::factory()->create(['role' => 'admin', 'email' => 'print-audit@example.test']));
    $pages = [];
    $get = function (string $key, string $url) use ($test, &$pages) {
        $res = $test->get($url);
        expect($res->status())->toBe(200, "Input page {$key} did not render");
        $pages[$key] = $res->getContent();
    };

    $test->post(route('admin.validate-hospital-number'), ['HospitalID' => '42']);
    $get('f1_demographic', route('demographic-profile'));
    $test->post(route('submit-demograpic-profile'), demographicPayload());
    $get('f1_riskfactor', route('risk-factor'));
    $test->post(route('submit-riskfactor-data'), riskPayload());
    $get('f1_cancer', route('cancer-diagnose'));
    $test->post(route('submit-cancer-diagnose-data'), diagnosisPayload());
    $get('f1_treatment', route('treatment-diagnose'));
    $test->post(route('submit-treatment-data'), treatmentPayload());
    foreach (['exposure', 'family-history-cancer', 'cancer-sites', 'contraceptives'] as $inc) {
        $pages["f1_inc_{$inc}"] = view("forms.includes.{$inc}")->render();
    }

    $hid = '0000000042';
    $first = ['date' => now()->toDateString(), 'name' => ['firstname' => 'A', 'lastname' => 'B'], 'primary_cancer_site' => ['Breast'],
              'laterality' => 'Left', 'histologic_diagnosis' => 'x', 'icd10' => 'C50'];
    $forms = [
        'f2' => ['submit.follow-up', [], ['form2-firstpage', 'form2-secondpage', 'form2-thirdpage', 'form2.fourthpage', 'form2.fifthpage', 'form2.sixpage']],
        'f3' => ['store.f3patientsurveillanceforms', [], ['form3-firstpage', 'form3.secondpage', 'form3.page3', 'form3.page4']],
        'f4' => ['store.palliative-form', ['reason' => ['Supportive Care'], 'setting' => ['Home']], ['form4-firstpage', 'form4.page2', 'form4.page3', 'form4.page4', 'form4.page5', 'form4.page6']],
    ];
    foreach ($forms as $prefix => [$store, $extra, $routes]) {
        $test->post(route($store, ['hospitalID' => $hid]), $first + $extra);
        foreach ($routes as $i => $route) {
            $get("{$prefix}_p" . ($i + 1), $i === 0 ? route($route, ['hospitalID' => $hid]) : route($route));
        }
    }
    return $pages;
}

/** [field segment => [value => true]] for radios, checkboxes and selects (including markup inside JS templates). */
function submittableValues(array $htmls): array
{
    $vals = [];
    foreach ($htmls as $html) {
        preg_match_all('/<input\b[^>]*>/is', $html, $inputs);
        foreach ($inputs[0] as $tag) {
            if (!preg_match('/name\s*=\s*["\']([^"\']+)["\']/i', $tag, $n)) continue;
            if (!preg_match('/type\s*=\s*["\'](radio|checkbox)["\']/i', $tag)) continue;
            if (!preg_match('/value\s*=\s*["\']([^"\']*)["\']/i', $tag, $v)) continue;
            preg_match_all('/[^\[\]]+/', str_replace('[]', '', $n[1]), $segs);
            foreach ([$segs[0][0], end($segs[0])] as $seg) {
                $vals[$seg][html_entity_decode($v[1], ENT_QUOTES)] = true;
            }
        }
        preg_match_all('/<select\b[^>]*name\s*=\s*["\']([^"\']+)["\'][^>]*>(.*?)<\/select>/is', $html, $selects, PREG_SET_ORDER);
        foreach ($selects as $sel) {
            preg_match_all('/[^\[\]]+/', $sel[1], $segs);
            preg_match_all('/<option\b[^>]*value\s*=\s*["\']([^"\']*)["\']/i', $sel[2], $opts);
            foreach ($opts[1] as $o) {
                $vals[end($segs[0])][html_entity_decode($o, ENT_QUOTES)] = true;
            }
        }
    }
    return $vals;
}

function refTokens(string $ref): array
{
    preg_match_all('/->\s*(\w+)|\[\s*["\']?([\w\s]+?)["\']?\s*\]/', $ref, $m, PREG_SET_ORDER);
    return array_map(fn ($x) => ($x[1] ?? '') !== '' ? $x[1] : trim($x[2]), $m);
}

/** Resolve "$alias['x']" through "@php $alias = $data->relation ...;" definitions into a token path. */
function resolveRef(string $ref, array $aliases, int $depth = 0): array
{
    preg_match('/^\$(\w+)/', $ref, $base);
    $tokens = refTokens($ref);
    if ($depth < 5 && isset($aliases[$base[1]])) {
        return array_merge(resolveRef($aliases[$base[1]], $aliases, $depth + 1), $tokens);
    }
    return $tokens;
}

/** Extract [line, ref, literal] for every value-test inside {{ ... 'checked' ... }} in a print view. */
function printConditions(string $source): array
{
    $aliases = [];
    preg_match_all('/^\s*\$(\w+)\s*=\s*(.+?);/m', $source, $defs, PREG_SET_ORDER);
    foreach ($defs as [$all, $alias, $rhs]) {
        if (preg_match('/^\[\s*\$' . $alias . '\s*\]$/', trim($rhs))) continue;
        if (preg_match('/' . PC_REF . '/', $rhs, $r) && refTokens($r[1]) && !str_starts_with(trim($rhs), 'isset(')) {
            $aliases[$alias] = $r[1];
        }
    }

    $conds = [];
    $opt = '\)?\s*(?:\?\?\s*(?:\'\'|""|null|\[\])\s*)?\)?';
    foreach (explode("\n", $source) as $i => $line) {
        preg_match_all('/\{\{(.*?)\}\}/', $line, $blocks);
        foreach ($blocks[1] as $blk) {
            if (!str_contains($blk, 'checked') && !str_contains($blk, '$cb(')) continue;
            preg_match_all('/' . PC_REF . '\s*' . $opt . '\s*(?:===?|!==?)\s*' . PC_LIT . '/', $blk, $a, PREG_SET_ORDER);
            foreach ($a as $m) $conds[] = [$i + 1, $m[1], $m[2]];
            preg_match_all('/' . PC_LIT . '\s*===?\s*' . PC_REF . '/', $blk, $b, PREG_SET_ORDER);
            foreach ($b as $m) $conds[] = [$i + 1, $m[2], $m[1]];
            preg_match_all('/in_array\(\s*' . PC_LIT . '\s*,\s*(?:\(array\)\s*)?\(?' . PC_REF . '/', $blk, $c, PREG_SET_ORDER);
            foreach ($c as $m) $conds[] = [$i + 1, $m[2], $m[1]];
        }
    }
    return [$conds, $aliases];
}

it('only tests values on the prints that the input forms can save', function () {
    $pages = renderInputPages($this);
    $problems = [];
    $checked = 0;

    foreach (PRINT_SOURCES as $form => $cfg) {
        $source = file_get_contents(resource_path('views/' . $cfg['view']));
        [$conds, $aliases] = printConditions($source);

        // An empty-key lookup such as $data->relation[''] is always null, so every box that uses it stays blank
        foreach (explode("\n", $source) as $i => $line) {
            if (preg_match('/\[\s*(\'\'|"")\s*\]/', $line)) {
                $problems[] = sprintf('%s L%d: empty-key lookup %s', $form, $i + 1, trim($line));
            }
        }

        foreach ($conds as [$line, $ref, $literal]) {
            $tokens = resolveRef($ref, $aliases);
            if (!$tokens) continue;                      // plain local flag, not a field
            $field = end($tokens);
            $relation = collect($tokens)->first(fn ($t) => isset($cfg['relations'][$t]));
            $sourcePages = $relation ? $cfg['relations'][$relation] : $cfg['default'];
            $values = submittableValues(array_intersect_key($pages, array_flip($sourcePages)));

            if (!isset($values[$field])) continue;       // free-text / computed field
            $checked++;
            if (!isset($values[$field][$literal])) {
                $problems[] = sprintf('%s L%d: %s == "%s" (input %s never submits this)', $form, $line, $field, $literal, implode(',', $sourcePages));
            }
        }
    }

    expect($checked)->toBeGreaterThan(900);
    expect($problems)->toBe([], "Print conditions that can never be ticked:\n" . implode("\n", $problems));
});

/** State of the checkbox drawn just before the n-th occurrence of $label in a print. */
function boxBefore(string $html, string $label, int $nth = 1): string
{
    $pos = -1;
    for ($i = 0; $i < $nth; $i++) {
        $pos = strpos($html, $label, $pos + 1);
        if ($pos === false) {
            return 'label not found';
        }
    }
    $chunk = substr($html, max(0, $pos - 900), 900);
    $c = strrpos($chunk, '#checked-checkbox-id');
    $u = strrpos($chunk, '#unchecked-checkbox-id');
    if ($c === false && $u === false) {
        return 'no box';
    }
    return ($c !== false && ($u === false || $c > $u)) ? 'checked' : 'unchecked';
}

it('ticks the saved answers on the printed forms', function () {
    $this->actingAs(User::factory()->create(['role' => 'admin', 'email' => 'print-render@example.test']));
    $hid = '0000000042';

    // ---- Form 1
    $p = \App\Models\Demographicprofile::create(demographicPayload(['occupation' => 'Unemployed Retired', 'civil_status' => 'Divorced/Separated/Annulled'])
        + ['hospitalID' => $hid, 'status' => 1, 'current' => ['province' => 'P', 'city' => 'C', 'barangay' => 'B']]);
    \App\Models\Riskfactor::create(riskPayload(['infections' => ['Hepatitis B', 'HPV'], 'comorbidities' => ['Immunosuppression'], 'cancer_screening' => ['Low-dose CT Scan']]) + ['code' => $p->id]);
    \App\Models\Cancerdiagnose::create(diagnosisPayload(['cancer_sites' => ['Brain (CNS)'], 'laterality' => 'Unknown']) + ['code' => $p->id, 'primary_site_number' => 1]);
    \App\Models\Treatment::create(treatmentPayload([
        'radiotherapy' => 'Yes', 'radiotherapy_types' => ['Stereotactic Radiosurgery / Radiotherapy'], 'radiotherapy_sequence' => 'Sequential', 'radiotherapy_goal' => 'Definitive',
        'other_therapies' => 'Yes', 'other_therapies_types' => ['Embolization'],
    ]) + ['code' => $p->id]);
    $h = $this->get(route('result.form1', ['id' => $p->id]))->assertOk()->getContent();
    foreach (['Unemployed', 'Divorced', 'Hepatitis B', 'Human Papillomavirus', 'Immunosuppression', 'Low-dose', 'Stereotactic', 'Embolization'] as $label) {
        expect(boxBefore($h, $label))->toBe('checked', "Form 1: {$label}");
    }

    // ---- Form 2 (radiotherapy page left unanswered on purpose)
    $e2 = \App\Models\F2followup::create(['hospitalID' => $hid, 'date' => '2026-10-01', 'name' => ['firstname' => 'A', 'lastname' => 'B'], 'primary_cancer_site' => ['Breast'],
        'primary_cancer_site_other' => 'Axilla', 'laterality' => 'Left', 'histologic_diagnosis' => 'x', 'icd10' => 'C50', 'other_remarks' => 'N/A', 'status' => 1]);
    \App\Models\F2patientstatus::create(['code' => $e2->id, 'ecog_status' => 'Yes', 'ecog_grade' => 'Grade 1', 'other_functional_assessment' => 'Karnofsky 80',
        'surgery_done' => 'No', 'ongoing_drug_therapy' => 'Yes', 'drug_purpose' => 'Adjuvant', 'drug_types' => ['Cytotoxic']]);
    \App\Models\F2cancerdiagnoseoutcome::create(['code' => $e2->id, 'diagnosis_outcome' => ['Death (other cause/Non-Cancer related)'], 'financial_support' => 'Yes',
        'financial_type' => ['PhilHealth'], 'cspmap_meds' => ['Calcium Folinate (Leucovorin Calcium) 50 mg vial', 'Docetaxel 40 mg/mL, 2 mL vial'], 'other_meds' => ['Blinatumomab']]);
    $h = $this->get(route('form2', ['id' => $e2->id]))->assertOk()->getContent();
    expect(boxBefore($h, '>Adjuvant'))->toBe('checked', 'Form 2: drug purpose')
        ->and(boxBefore($h, 'Neoadjuvant'))->toBe('unchecked')
        ->and(boxBefore($h, 'Calcium Folinate'))->toBe('checked')
        ->and(boxBefore($h, 'Docetaxel 40 mg'))->toBe('checked')
        ->and(boxBefore($h, 'Ondansetron (as Hydrochloride) 2 mg/mL, 4 mL'))->toBe('unchecked')
        ->and(boxBefore($h, 'Blinatumomab'))->toBe('checked')
        ->and(boxBefore($h, 'Death (other'))->toBe('checked')
        ->and($h)->toContain('Karnofsky 80')->toContain('Axilla');

    // ---- Form 3
    $e3 = \App\Models\F3patientsurveillanceform::create(['hospitalID' => $hid, 'date' => '2026-10-01', 'name' => ['firstname' => 'A', 'lastname' => 'B'], 'primary_cancer_site' => ['Breast'],
        'laterality' => 'Left', 'histologic_diagnosis' => 'x', 'icd10' => 'C50', 'status' => 1]);
    \App\Models\F3treatmenthistory2::create(['code' => $e3->id, 'first_radio' => 'No', 'second_radio' => 'No', 'third_radio' => 'No', 'fourth_radio' => 'No',
        'first_theranostics' => 'Yes', 'first_thera_type' => ['Selective Internal Radiation Therapy (SIRT)'], 'first_theranostics_other_specify' => 'Lutetium trial',
        'second_theranostics' => 'No', 'third_theranostics' => 'No', 'fourth_theranostics' => 'No', 'other_cancer' => 'No']);
    \App\Models\F3financialsupport::create(['code' => $e3->id, 'financial_support' => 'Yes', 'status' => 1,
        'financial_type' => ['Medical Assistance for Indigent & Financially-Incapacitated Patients (MAIP/DOH)', 'Non-Government Org./Civil Society Org.']]);
    $h = $this->get(route('form3', ['id' => $e3->id]))->assertOk()->getContent();
    expect(boxBefore($h, 'Medical Assistance'))->toBe('checked', 'Form 3: MAIP')
        ->and(boxBefore($h, 'Non-Government'))->toBe('checked')
        ->and(boxBefore($h, 'Selective Internal Radiation'))->toBe('checked')
        ->and(boxBefore($h, 'Others, specify: Lutetium trial'))->toBe('checked');

    // ---- Form 4
    $e4 = \App\Models\F4palliativeform::create(['hospitalID' => $hid, 'date' => '2026-10-01', 'name' => ['firstname' => 'A', 'lastname' => 'B'], 'reason' => ['Others'],
        'reason_others' => 'Family request', 'setting' => ['Home'], 'primary_cancer_site' => [], 'primary_cancer_site_other' => 'Unknown mass',
        'laterality' => 'Left', 'histologic_diagnosis' => 'x', 'icd10' => 'C50', 'status' => 1]);
    \App\Models\F4painassessment::create(['code' => $e4->id, 'assessment_date' => '2026-10-01', 'is_pain' => 'No', 'provocation_region' => 'Lower back', 'provocation_remarks' => 'worse at night',
        'paracetamol' => 'No', 'nsaids' => 'No', 'tramadol' => 'No', 'opioid' => 'No', 'other_drugs' => 'No', 'non_pharma' => 'No']);
    \App\Models\F4financialsupportmechanism::create(['code' => $e4->id, 'financial_support' => 'Yes', 'financial_type' => ['Philippine Charity Sweepstakes Office (PCSO)'],
        'cspmap_meds' => ['None'], 'other_meds' => ['None']]);
    $h = $this->get(route('form4', ['id' => $e4->id]))->assertOk()->getContent();
    expect(boxBefore($h, 'Family request'))->toBe('checked', 'Form 4: other reason')
        ->and(boxBefore($h, 'Charity Sweepstakes'))->toBe('checked')
        ->and($h)->toContain('Unknown mass')->toContain('worse at night');
});

it('leaves Yes/No boxes blank when a page was never answered', function () {
    $this->actingAs(User::factory()->create(['role' => 'admin', 'email' => 'print-blank@example.test']));
    // Only page 1 saved: every later Yes/No question is unanswered
    $e = \App\Models\F3patientsurveillanceform::create(['hospitalID' => '0000000042', 'date' => '2026-10-01', 'name' => ['firstname' => 'A', 'lastname' => 'B'],
        'primary_cancer_site' => ['Breast'], 'laterality' => 'Left', 'histologic_diagnosis' => 'x', 'icd10' => 'C50', 'status' => 1]);
    $blank = $this->get(route('form3', ['id' => $e->id]))->assertOk()->getContent();

    \App\Models\F3treatmenthistory2::create(['code' => $e->id, 'first_radio' => 'No', 'second_radio' => 'No', 'third_radio' => 'No', 'fourth_radio' => 'No',
        'first_theranostics' => 'No', 'second_theranostics' => 'No', 'third_theranostics' => 'No', 'fourth_theranostics' => 'No', 'other_cancer' => 'No']);
    $answered = $this->get(route('form3', ['id' => $e->id]))->assertOk()->getContent();

    // Answering nine questions "No" must tick nine more boxes than the unanswered print
    expect(substr_count($answered, '#checked-checkbox-id') - substr_count($blank, '#checked-checkbox-id'))->toBe(9);
});
