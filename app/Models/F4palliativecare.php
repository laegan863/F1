<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F4palliativecare extends Model
{
    protected $fillable = [
        'code',
        'nutritional_care',
        'nutritional_place',
        'nutritional_improved',
        'nursing_care',
        'nursing_place',
        'nursing_improved',
        'rehabilitation_care',
        'rehabilitation_place',
        'rehabilitation_improved',
        'psychosocial_care',
        'psychosocial_place',
        'psychosocial_improved',
        'spiritual_care',
        'spiritual_place',
        'spiritual_improved',
        'others_care',
        'others_specify',
        'others_place',
        'others_improved',
    ];

    public function f4palliativeforms()
    {
        return $this->belongsTo(F4palliativeform::class, "code", "id");
    }
}
