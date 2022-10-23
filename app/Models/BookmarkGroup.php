<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkGroup extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function media_resources()
    {
        return $this->belongsToMany(MediaResource::class, 'bookmark_group_media_resources');
    }
}
