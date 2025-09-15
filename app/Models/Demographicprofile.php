<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demographicprofile extends Model
{
    protected $table = "demographicprofiles";
    public $timestamps = true;
    protected $fillable = [
        'code',
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
}
