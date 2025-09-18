<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancerdiagnose extends Model
{
    protected $fillable = [
        'code',
        'multiple_sites',
        'primary_site_number',
        'cancer_sites',
        'cancer_site_other',
        'laterality',
        'histologic_diagnosis',
        'icd_10',
        'clinical_stage',
        't_stage',
        'n_stage',
        'm_stage',
        's_stage',
        'other_staging',
        'other_remarks',
        'cancer_status',
    ];

    protected $casts = [
        'cancer_sites' => 'array',
        'other_staging' => 'array',
    ];

    public function demographicprofile()
    {
        return $this->belongsTo(Demographicprofile::class, 'code', 'id');
    }
}
