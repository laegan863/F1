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
        'reason',
        'setting',
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
        'reason' => 'array',
        'setting' => 'array',
        'primary_cancer_site' => 'array',
        'stage' => 'array',
        'other_staging' => 'array',
    ];

    public function f4esas()
    {
        return $this->hasOne(F4esas::class, 'code', 'id');
    }

    public function f4painassessments()
    {
        return $this->hasOne(F4painassessment::class, "code", "id");
    }

    public function f4palliativecares()
    {
        return $this->hasOne(F4palliativecare::class, "code", "id");
    }

    public function f4cancerdiagnoseoutcomes()
    {
        return $this->hasOne(F4cancerdiagnoseoutcome::class, "code", "id");
    }

    public function f4financialsupportmechanisms()
    {
        return $this->hasOne(F4financialsupportmechanism::class, "code", "id");
    }
}
