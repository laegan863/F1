<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F3patientsurveillanceform extends Model
{
    public $timestamp = true;
    protected $table = "f3patientsurveillanceforms";
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

    public function f3cancerdiagnoseoutcomes(){
        return $this->hasOne(F3cancerdiagnoseoutcome::class, 'code', 'id');
    }

    public function f3cancertreatmenthistories()
    {
        return $this->hasOne(F3cancertreatmenthistory::class, 'code', 'id');
    }

    public function f3financialsupports()
    {
        return $this->hasOne(F3financialsupport::class, 'code', 'id');
    }

    public function f3treatmenthistory2s()
    {
        return $this->hasOne(F3treatmenthistory2::class, 'code', 'id');
    }
}
