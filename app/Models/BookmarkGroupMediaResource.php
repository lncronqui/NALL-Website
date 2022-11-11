<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkGroupMediaResource extends Model
{
    use HasFactory;
    public $timestamp = false;

    protected $table = 'bookmark_group_media_resource';

    public function bookmark_groups()
    {
        return $this->hasMany(BookmarkGroup::class);
    }

    public function media_resources()
    {
        return $this->hasMany(MediaResource::class);
    }
}
