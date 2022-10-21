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
        'journal_title',
        'date',
        'doi',
        'institution_id',
        'page',
        'pubType_id',
        'url',
        'encoded_by',
        'approved_by'

    ];

    public function encoder()
    {
        return $this->belongsTo(User::class, 'encoded_by', 'id');
    }

    public function approved_by()
    {
        return $this->belongsTo(User::class, 'approved_by', 'id');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function pubType()
    {
        return $this->belongsTo(PubType::class);
    }

    public function updated_by()
    {
        return $this->belongsTo(User::class);
    }

    public function access_requests()
    {
        return $this->hasMany(AccessRequest::class);
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
