<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F4painassessment extends Model
{
    protected $fillable = [
        'code',
        'assessment_date',
        'is_pain',
        'pain_score',
        'provocation',
        'provocation_quality',
        'provocation_region',
        'provocation_remarks',
        'severity',
        'timing',
        'findings',
        'verbal_vocal',
        'body_movement',
        'facial',
        'touching',
        'associated_signs',
        'signs',
        'paracetamol',
        'paracetamol_pain_controlled',
        'paracetamol_date',
        'nsaids',
        'nsaids_name',
        'nsaids_pain_controlled',
        'nsaids_date',
        'tramadol',
        'tramadol_pain_controlled',
        'tramadol_date',
        'opioid',
        'opioid_name',
        'opioid_pain_controlled',
        'opioid_date',
        'other_drugs',
        'other_drugs_specify_name',
        'other_drugs_pain_controlled',
        'other_drugs_date',
        'non_pharma',
        'non_pharma_specify_name',
        'non_pharma_pain_controlled',
        'non_pharma_date',
    ];

    protected $casts = [
        'provocation_quality' => 'array',
        'verbal_vocal'        => 'array',
        'body_movement'       => 'array',
        'touching'            => 'array',
        'facial'              => 'array',
        'signs'               => 'array',
    ];

    public function f4palliativeforms()
    {
        return $this->belongsTo(F4palliativeform::class, "code", "id");
    }
}
