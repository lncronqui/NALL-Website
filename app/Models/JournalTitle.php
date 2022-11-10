<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalTitle extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function media_resources()
    {
        return $this->hasMany(MediaResource::class);
    }
}
