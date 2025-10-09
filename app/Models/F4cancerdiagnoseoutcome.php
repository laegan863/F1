<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F4cancerdiagnoseoutcome extends Model
{
    protected $fillable = [
        'code',
        'diagnosis_outcome',
        'diagnosis_outcome_date',
        'immediate_cause',
        'antecedent_cause',
        'underlying_cause',
        'other_condition',
    ];

    // Cast JSON field to array automatically
    protected $casts = [
        'diagnosis_outcome' => 'array',
        'diagnosis_outcome_date' => 'date',
    ];

    public function f4palliativeforms()
    {
        return $this->belongsTo(F4palliativeform::class, "code", "id");
    }
}
