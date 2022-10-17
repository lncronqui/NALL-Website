<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleAuthor extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'author_id'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function authors()
    {
        return $this->hasMany(Author::class);
    }
}
