<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $user = User::with('bookmarks.institution', 'bookmarks.subjects', 'bookmarks.authors', 'bookmarks.resource_type')->find(Auth::id());
        return view('user.bookmark', compact('user'));
    }
}
