<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F4palliativeform extends Model
{
    public $timestamp = true;
    protected $table = "f4palliativeforms";
    protected $fillable = [
        'hospitalID',
        'date',
        'name',
        'primary_cancer_site',
        'primary_cancer_site_other',
        'laterality',
        'histologic_diagnosis',
        'icd10',
        'clinical_stage',
        'stage',
        'other_staging',
        'other_remarks',
        'status'
    ];

    protected $casts = [
        'name' => 'array',
        'primary_cancer_site' => 'array',
        'stage' => 'array',
        'other_staging' => 'array',
    ];

    public function F4esas()
    {
        return $this->hasOne(F4esas::class, 'code', 'id');
    }
}
