<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Follower extends Model
{
    use HasFactory;
    protected $fillable=[
        "follower_id",
        "following_id"
    ];

    /**
     * Get the comments for the blog post.
     */
    public function follow(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

}
