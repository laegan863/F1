<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';

    protected $fillable = [
        'code',
        'date_of_diagnosis',
        'team_approach',
        'disciplines',
        'discipline_other',
        'surgery',
        'surgery_goal',
        'anticancer_drug',
        'drug_purpose',
        'drug_types',
        'drug_types_others',

        'first_line_drug',
        'first_drug_regimen',
        'first_cycles',
        'first_treatment_goal',
        'first_time',
        'second_line_drug',
        'second_drug_regimen',
        'second_cycles',
        'second_treatment_goal',
        'second_time',
        'third_line_drug',
        'third_drug_regimen',
        'third_cycles',
        'third_treatment_goal',
        'third_time',
        'other_subsequent_line_drug',
        'indicate_line',
        'other_subsequent_drug_regimen',
        'other_subsequent_cycles',
        'other_subsequent_treatment_goal',
        'other_subsequent_time',
        'radiotherapy',
        'radiotherapy_types',
        'radiotherapy_types_others',
        'radiotherapy_sequence',
        'radiotherapy_goal',
        'theranostics',
        'theranostics_types',
        'theranostics_types_others',
        'theranostics_goal',
        'other_therapies',
        'other_therapies_types',
        'other_therapies_other',
    ];

    protected $casts = [
        'disciplines'            => 'array',
        'surgery_goal'           => 'array',
        'drug_purpose'           => 'array',
        'drug_types'             => 'array',
        'radiotherapy_types'     => 'array',
        'theranostics_types'     => 'array',
        'other_therapies_types'  => 'array',
    ];

    public function demographicprofile()
    {
        return $this->belongsTo(Demographicprofile::class, 'code', 'id');
    }
}
