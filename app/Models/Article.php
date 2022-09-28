<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'abstract',
        'author_id',
        'date',
        'doi',
        'institution_id',
        'page',
        'pubType_id',
        'url',
        'user_id'
    ];

    public function author()
    {
        return $this->hasMany(Author::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function pubType()
    {
        return $this->belongsTo(PubType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
