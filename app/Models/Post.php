<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getPublishedAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
