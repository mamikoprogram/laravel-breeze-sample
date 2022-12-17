<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Object of type App\Models\Thread is not callable
// 以下の関数がうまく呼び出せていない
class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
