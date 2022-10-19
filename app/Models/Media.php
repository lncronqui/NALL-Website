<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'url',
        'encoded_by',
        'approved_by'
    ];

    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function encoder(){
        return $this->belongsTo(User::class, 'encoded_by');
    }

    public function approver(){
        return $this->belongsTo(User::class, 'approved_by');
    }
}
