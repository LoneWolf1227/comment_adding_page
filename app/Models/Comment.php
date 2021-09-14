<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'comment'];

    public function scopeAllComments($query)
    {
        return $query->orderBy('created_at', 'desc')->get()->toArray();
    }
}
