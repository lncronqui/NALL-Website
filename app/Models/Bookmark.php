<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function media_resources()
    {
        return $this->hasMany(MediaResource::class);
    }
}
