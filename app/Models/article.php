<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
