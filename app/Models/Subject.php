<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function media_resources()
    {
        return $this->belongsToMany(MediaResource::class, 'media_resource_subjects', 'subject_id', 'media_resource_id');
    }
}
