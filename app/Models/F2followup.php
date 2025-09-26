<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F2followup extends Model
{
    public $timestamp = true;
    protected $table = "f2followups";
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
    ];

    protected $casts = [
        'name' => 'array',
        'primary_cancer_site' => 'array',
        'stage' => 'array',
        'other_staging' => 'array',
    ];

    public function f2patientstatus()
    {
        return $this->hasOne(F2patientstatus::class, 'code', 'id');
    }

    public function f2radiotheraphy()
    {
        return $this->hasOne(f2radiotheraphy::class, 'code', 'id');
    }

    public function f2othercancertheraphy()
    {
        return $this->hasOne(f2othercancertheraphy::class, 'code', 'id');
    }

}
