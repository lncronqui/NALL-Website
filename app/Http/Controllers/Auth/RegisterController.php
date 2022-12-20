<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRegisterRequest;
use App\Models\Institution;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    public function index()
    {
        $institutions = Institution::all();
        return view('user.auth.user-signup', compact('institutions'));
    }


    public function store(StoreRegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'institution_id' => $validated['institution_id'],
            'role_id' => 1,
        ]);

        event(new Registered($user));

        return redirect(route('user.sign-in.index'))->with('success', 'Registration successful. Verify email to continue.');
    }
}
