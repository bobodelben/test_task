<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    protected $casts = [
        "options" => "array"
    ];

    function survey(): BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }
}
