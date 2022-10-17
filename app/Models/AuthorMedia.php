<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorMedia extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'media_id'];

    public function authors()
    {
        return $this->hasMany(Author::class);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }
}
