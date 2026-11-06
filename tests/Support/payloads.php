<?php

/*
 * Shared test data builders for the Form 1 wizard (used by several test files).
 */

use App\Models\Cancerdiagnose;
use App\Models\Demographicprofile;
use App\Models\Riskfactor;
use App\Models\Treatment;

function demographicPayload(array $overrides = []): array
{
    return array_replace_recursive([
        'patient_first_encounter' => now()->toDateString(),
        'patient_health_facility_id' => '0000012345',
        'philhealth_id' => '123456789012',
        'name' => ['firstname' => 'Maria', 'middlename' => 'Santos', 'lastname' => 'Cruz', 'suffix' => 'N/A'],
        'date_of_birth' => '1970-05-01',
        'sex' => 'female',
        'civil_status' => 'Married',
        'nationality' => 'Filipino',
        'permanent' => ['province' => 'Negros Occidental', 'city' => 'City of Bacolod', 'barangay' => 'Barangay 1'],
        'same_as_address' => 'on',
        'mobile_number' => '09123456789',
        'email_address' => 'maria@example.com',
        'relative' => ['province' => 'Negros Occidental', 'city' => 'City of Bacolod', 'barangay' => 'Barangay 2'],
        'relative_phone_number' => '09987654321',
        'highest_education' => 'Tertiary',
        'occupation' => 'Professionals',
        'number_of_years_in_occupation' => 10,
    ], $overrides);
}

function riskPayload(array $overrides = []): array
{
    return array_merge([
        'tobacco_use' => 'Current Smoker',
        'second_hand_smoke' => 'No',
        'alcohol_use' => 'No history of harmful use of alcohol',
        'physical_activity' => 'Usually Inactive',
        'healtydiet' => ['fatmeat' => 'high', 'vegetables' => 'low', 'sodium_salt' => 'moderate', 'sugar' => 'low'],
        'occupational_exposure' => 'no',
        'air_pollution' => 'yes',
        'family_history' => 'no',
        'infections' => ['None'],
        'comorbidities' => ['Hypertension'],
        'has_cancer' => 'no',
        'sexual_partners' => 1,
        'age_first_intercourse' => 20,
        'contraceptives_use' => 'No',
        'cancer_screening' => ['Mammography'],
        'vaccine_hpv' => 'No',
        'vaccine_hepb' => 'Unknown',
    ], $overrides);
}

function diagnosisPayload(array $overrides = []): array
{
    return array_merge([
        'multiple_sites' => 'no',
        'cancer_sites' => ['Breast'],
        'laterality' => 'Left',
        'histologic_diagnosis' => 'Invasive ductal carcinoma',
        'icd_10' => 'C50.9',
        'clinical_stage' => 'Stage II',
        'cancer_status' => 'Newly diagnosed',
    ], $overrides);
}

function treatmentPayload(array $overrides = []): array
{
    return array_merge([
        'date_of_diagnosis' => now()->subMonth()->toDateString(),
        'team_approach' => 'No',
        'surgery' => 'Yes',
        'surgery_goal' => ['Curative'],
        'anticancer_drug' => 'No',
        'first_line_drug' => 'No',
        'second_line_drug' => 'No',
        'third_line_drug' => 'No',
        'other_subsequent_line_drug' => 'No',
        'radiotherapy' => 'No',
        'theranostics' => 'No',
        'other_therapies' => 'No',
    ], $overrides);
}

function completedRecord(): Demographicprofile
{
    $p = Demographicprofile::create(demographicPayload() + ['hospitalID' => '0000000042', 'status' => 1, 'current' => ['province' => 'X', 'city' => 'Y', 'barangay' => 'Z']]);
    Riskfactor::create(riskPayload() + ['code' => $p->id]);
    Cancerdiagnose::create(diagnosisPayload() + ['code' => $p->id, 'primary_site_number' => 1]);
    Treatment::create(treatmentPayload() + ['code' => $p->id]);
    return $p;
}
