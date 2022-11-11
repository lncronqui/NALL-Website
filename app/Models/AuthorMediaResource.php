<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorMediaResource extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'author_media_resource';

    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    public function media_resources()
    {
        return $this->hasMany(MediaResource::class);
    }
}
