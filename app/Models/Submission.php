<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "answers" => "array"
    ];

    function unitOfAnalysis(): BelongsTo
    {
        return $this->belongsTo(UnitOfAnalysis::class);
    }
}
