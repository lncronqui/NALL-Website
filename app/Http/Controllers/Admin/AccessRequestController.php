<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
