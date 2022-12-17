<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class MediaResource extends Model
{
    use HasFactory;
    use Sortable;
    use SoftDeletes;

    public $sortable = ['title', 'page', 'date', 'institution_id', 'access_type_id', 'resource_type_id', 'subject_id'];

    public function requests()
    {
        return $this->belongsToMany(User::class, 'requests', 'media_resource_id', 'user_id');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_media_resources');
    }

    public function bookmark_groups()
    {
        return $this->belongsToMany(BookmarkGroup::class, 'bookmark_group_media_resources');
    }

    public function resource_type()
    {
        return $this->belongsTo(ResourceType::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function access_type()
    {
        return $this->belongsTo(AccessType::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
