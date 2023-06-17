<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Snippet extends Model
{
    use HasFactory;
    protected $fillable = [
        "uuid",
        "user_id",
        "content",
        "status",
        "likes",
        "comments"
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
