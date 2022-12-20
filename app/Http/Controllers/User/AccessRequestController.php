<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccessRequest;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AccessRequestController extends Controller
{
    public function index()
    {
        $user = User::with('requests.institution', 'requests.subjects')->find(Auth::id());
        return view('user.auth-view-req', compact('user'));
    }
}
