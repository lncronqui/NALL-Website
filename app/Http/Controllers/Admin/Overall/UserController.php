<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Overall\StoreUserRequest;
use App\Models\Institution;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role', 'institution')
            ->where([
                ['role_id', '>', '1']
            ])
            ->sortable()
            ->paginate();

        return view('admin.overall.account.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::all();
        $roles = Role::where([
            ['id', '>', '1']
        ])
        ->get();

        return view('admin.overall.account.create', compact('institutions', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->safe()->except(['confirm_password']);
        User::create($validated);

        return redirect()->route('admin.overall.accounts.index')->with('success', 'User account added.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $institutions = Institution::all();
        $roles = Role::where([
                ['id', '>', '1']
            ])
            ->get();

        return view('admin.overall.account.edit', compact('institutions', 'roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$id,
            'institution_id' => 'required|exists:institutions,id',
            'role_id' => 'required|exists:roles,id|integer|between:2,3'
        ]);
        $validated = $validator->validated();
        $oldEmail = $user->email;

        if ($oldEmail != $validated['email']) {
            $user->update([
                'email_verified_at' => null
            ]);
            $user->sendEmailVerificationNotification();
        }
        $user->update($validated);

        return redirect()->route('admin.overall.accounts.index')->with('success', 'User account updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
