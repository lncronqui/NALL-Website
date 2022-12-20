<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Overall\StoreUserRequest;
use App\Mail\AccountAdminMail;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role', 'institution')
            ->where([
                ['role_id', '>', '1']
            ])
            ->get();

        return view('admin.overall.account.index', compact('users'));
    }

    public function create()
    {
        return view('admin.overall.account.create');
    }

    public function create_overall()
    {
        $institutions = Institution::all();

        return view('admin.overall.account.add-overall', compact('institutions'));
    }

    public function create_admin()
    {
        $institutions = Institution::all();

        return view('admin.overall.account.add-uni', compact('institutions'));
    }

    public function store_overall(StoreUserRequest $request)
    {
        $password = Str::random(15);
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'institution_id' => $validated['institution_id'],
            'role_id' => 3,
            'password' => Hash::make($password)
        ]);

        Mail::to($user->email)->send(new AccountAdminMail($user, $password));

        return redirect(route('admin.overall.accounts.index'))->with('success', 'Administrator account created');
    }

    public function store_admin(StoreUserRequest $request)
    {
        $password = Str::random(15);
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'institution_id' => $validated['institution_id'],
            'role_id' => 2,
            'password' => Hash::make($password)
        ]);

        Mail::to($user->email)->send(new AccountAdminMail($user, $password));

        return redirect(route('admin.overall.accounts.index'))->with('success', 'Administrator account created');
    }

    public function destroy(User $user)
    {
        //
    }
}
