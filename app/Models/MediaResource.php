<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaResource extends Model
{
    use HasFactory;

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_media_resources');
    }

    public function bookmark_groups()
    {
        return $this->belongsToMany(BookmarkGroup::class, 'bookmark_group_media_resources');
    }
}
