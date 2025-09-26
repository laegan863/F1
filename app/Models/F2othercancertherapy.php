<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class F2othercancertherapy extends Model
{
    protected $fillable = [
        'code',
        'other_cancer_therapies',
        'cancer_therapies',
        'cancer_therapies_other',
        'pre_op_scenario',
        'post_op_scenario',
        'treatment_status',
    ];

    protected $casts = [
        'cancer_therapies' => 'array',
    ];

    public function f2followup(): BelongsTo
    {
        return $this->belongsTo(F2followup::class, 'code', 'id');
    }
}
