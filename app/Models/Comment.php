<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'heart', 'lesson_id', 'user_id', 'parent_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function answer() {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
