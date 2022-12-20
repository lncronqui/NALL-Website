<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Http\Request;

class AccessRequestController extends Controller
{
    public function index()
    {
        $users = User::with('institution', 'requests', 'requests.resource_type')
            ->get();
        return view('admin.request.index', compact('users'));
    }

    public function detach(Request $request)
    {
        $mediaResource = MediaResource::find($request->mediaResource);
        $user = User::find($request->user);

        $user->requests()->detach($mediaResource->id);
        return redirect()->back()->with('success', 'Deleted request successfully.');
    }
}
