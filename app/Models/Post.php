<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table='posts';
    protected $fillable=['title','posted_date','author','content'];

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->posted_date = now()->toDateString();
        });
    }
}
