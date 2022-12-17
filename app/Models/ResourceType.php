<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function media_resources()
    {
        return $this->HasMany(MediaResource::class);
    }
}
