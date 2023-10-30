<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UnitOfAnalysis extends Model
{
    use HasFactory;

    function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function submission(): HasOne
    {
        return $this->hasOne(Submission::class);
    }
}
