<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F4esas extends Model
{
    protected $fillable = [
        'code',
        'gcs_score',
        'esasr_score',
        'pain',
        'tiredness',
        'drowsiness',
        'nausea',
        'appetite',
        'breath',
        'depression',
        'anxiety',
        'wellbeing',
        'other_problem',
        'other_problem_score',
    ];

    public function f4palliativeforms()
    {
        return $this->belongsTo(F4palliativeform::class, 'code', 'id');
    }
}
