<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email'
    ];

    public function media_resources()
    {
        return $this->belongsToMany(MediaResource::class, 'author_media_resources');
    }
}
