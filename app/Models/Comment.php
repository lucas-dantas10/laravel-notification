<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['user_id', 'post_id', 'title', 'body'];

    public function post()
    {
        return $this->belongsTo(Post::class); // Muitos para Um
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
