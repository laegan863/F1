<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demographicprofile extends Model
{
    protected $table = "demographicprofiles";
    public $timestamps = true;
    protected $fillable = [
        'code',
        'patient_first_encounter',
        'patient_health_facility_id',
        'philhealth_id',
        'name',
        'married_maiden_name',
        'date_of_birth',
        'sex',
        'civil_status',
        'nationality',
        'permanent',
        'current',
        'same_as_address',
        'mobile_number',
        'email_address',
        'relative',
        'relative_phone_number',
        'relative_email',
        'highest_education',
        'occupation',
        'number_of_years_in_occupation',
    ];

    protected $casts = [
        'name' => 'array',
        'permanent' => 'array',
        'current' => 'array',
        'relative' => 'array',
    ];

    public function riskfactors()
    {
        return $this->hasOne(Riskfactor::class, 'code', 'id');
    }

    public function cancerdiagnoses()
    {
        return $this->hasOne(Cancerdiagnose::class, 'code', 'id');
    }

    public function treatments()
    {
        return $this->hasOne(Treatment::class, 'code', 'id');
    }
}
