<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F3treatmenthistory2 extends Model
{

    protected $table = "f3treatmenthistory2s";

    protected $fillable = [

        'code',
        // RADIOTHERAPY
        'first_radio','first_radio_type','first_radio_type_other','first_sequence','first_treatment_goal','first_radio_adverse',
        'second_radio','second_radio_type','second_radio_type_other','second_sequence','second_treatment_goal','second_radio_adverse',
        'third_radio','third_radio_type','third_radio_type_other','third_sequence','third_treatment_goal','third_radio_adverse',
        'fourth_radio','fourth_radio_type','fourth_radio_type_other','fourth_sequence','fourth_treatment_goal','fourth_radio_adverse',

        // THERANOSTICS
        'first_theranostics','first_thera_type','first_theranostics_other_specify','first_thera_goal','first_thera_adverse',
        'second_theranostics','second_thera_type','second_theranostics_other_specify','second_thera_goal','second_thera_adverse',
        'third_theranostics','third_thera_type','third_theranostics_other_specify','third_thera_goal','third_thera_adverse',
        'fourth_theranostics','fourth_thera_type','fourth_theranostics_other_specify','fourth_thera_goal','fourth_thera_adverse',

        // OTHER
        'other_cancer','other_cancer_type','cancer_type_other_specify',

        // REMARKS
        'remarks',
    ];

    protected $casts = [

        'first_radio_type' => 'array',
        'second_radio_type' => 'array',
        'third_radio_type' => 'array',
        'fourth_radio_type' => 'array',

        // theranostics types
        'first_thera_type' => 'array',
        'second_thera_type' => 'array',
        'third_thera_type' => 'array',
        'fourth_thera_type' => 'array',

        // other therapies
        'other_cancer_type' => 'array',
    ];
}
