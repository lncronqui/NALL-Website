<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaResourceSubject extends Model
{
    use HasFactory;

    public function media_resources()
    {
        return $this->hasMany(MediaResource::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
