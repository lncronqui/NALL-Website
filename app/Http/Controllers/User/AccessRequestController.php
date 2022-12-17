<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccessRequest;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AccessRequestController extends Controller
{
    public function index()
    {
        $user = User::with('requests.institution', 'requests.subject')->find(Auth::id());
        return view('user.auth-view-req', compact('user'));
    }

    public function request($id)
    {
        $user = User::find(Auth::id());
        $mediaResource = MediaResource::find($id);

        $user->request()->attach($mediaResource);

        return back()->with('success', 'Media resource requested.');
    }
}
