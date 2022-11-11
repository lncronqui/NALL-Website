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

    public $sortable = ['title', 'page', 'date', 'institution_id', 'access_type_id', 'resource_type_id'];

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

    public function journal_title()
    {
        return $this->belongsTo(JournalTitle::class);
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
