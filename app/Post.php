<?php

namespace App;

use App\Tag;
use App\User;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
{
    return $this->belongsToMany(Tag::class);
}
public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}

}
