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

    public function F4painassessment()
    {
        return $this->hasOne(F4painassessment::class, "code", "id");
    }

    public function F4palliativecare()
    {
        return $this->hasOne(F4palliativecare::class, "code", "id");
    }

    public function F4cancerdiagnoseoutcome()
    {
        return $this->hasOne(F4cancerdiagnoseoutcome::class, "code", "id");
    }

    public function F4financialsupportmechanism()
    {
        return $this->hasOne(F4financialsupportmechanism::class, "code", "id");
    }
}
