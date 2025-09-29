<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F3financialsupport extends Model
{
        protected $fillable = [
        'code',
        'financial_support',
        'financial_type',
        'financial_other',
        'cspmap_meds',
        'cspmap_other',
        'other_meds',
        'other_med_other',
    ];

    protected $casts = [
        'financial_type' => 'array',
        'cspmap_meds' => 'array',
        'other_meds' => 'array',
    ];

    public function F3cancerdiagnoseoutcome()
    {
        return $this->belongsTo(F3cancerdiagnoseoutcome::class, 'code', 'id');
    }
}
