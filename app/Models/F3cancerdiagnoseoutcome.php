<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F3cancerdiagnoseoutcome extends Model
{
    protected $fillable = [
        'code',
        'diagnosis_outcome',
        'diagnosis_outcome_date',
        'cause_immediate',
        'cause_antecedent',
        'cause_underlying',
        'cause_other',
    ];

    protected $casts = [
        'diagnosis_outcome' => 'array',
        'diagnosis_outcome_date' => 'date',
    ];

    public function f3patientsurveillanceforms(){
        return $this->belongsTo(F3patientsurveillanceform::class, 'code', 'id');
    }

}
