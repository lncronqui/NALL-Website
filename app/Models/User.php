<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Sortable;

    public $sortable = ['name', 'email', 'institution_id', 'role_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function requests()
    {
        return $this->belongsToMany(MediaResource::class, 'requests', 'user_id', 'media_resource_id');
    }

    public function bookmarks()
    {
        return $this->belongsToMany(MediaResource::class, 'bookmarks', 'user_id', 'media_resource_id');
    }

    public function isAdmin()
    {
        return $this->role->is_admin;
    }

    public function hasRole(String $role)
    {
        return $this->role->name === $role;
    }

    public function hasBookmark($id)
    {
        $mediaResource = MediaResource::find($id);
        return auth()->user()->bookmarks->contains($mediaResource);
    }

    public function hasRequest($id)
    {
        $mediaResource = MediaResource::find($id);
        return auth()->user()->requests->contains($mediaResource);
    }

    public function hasInstitution()
    {
        return isset(auth()->user()->institution->name);
    }
}
