<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F2radiotheraphy extends Model
{
    protected $fillable = [
        'code',
        'radiotherapy',
        'radio_date_start',
        'radio_date_end',
        'radio_total_dose',
        'radio_dose_fraction',
        'radio_total_fractions',
        'radio_total_days',
        'radio_body_site',
        'radio_body_site_other',
        'radio_type',
        'radio_type_other',
        'radio_goal',
        'theranostics',
        'theranostics_type',
        'theranostics_type_other',
        'thera_total_planned',
        'thera_total_received',
        'thera_sequences',
        'thera_goal',
    ];

    protected $casts = [
        'radio_body_site'     => 'array',
        'radio_type'          => 'array',
        'theranostics_type'   => 'array',
    ];

    public function f2followup()
    {
        return $this->belongsTo(F2followup::class, 'code', 'id');
    }
}
