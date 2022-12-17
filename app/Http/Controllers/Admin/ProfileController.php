<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function edit_name()
    {
        return view('admin.profile.edit-name');
    }

    public function edit_email()
    {
        return view('admin.profile.edit-email');
    }

    public function edit_institution()
    {
        return view('admin.profile.edit-institution');
    }

    public function edit_password()
    {
        return view('admin.profile.edit-password');
    }

    public function update_name(Request $request)
    {
        return redirect()->back()->with('success', 'Updated.');
    }

    public function update_email(Request $request)
    {
        return redirect()->back()->with('success', 'Updated.');
    }

    public function update_institution(Request $request)
    {
        return redirect()->back()->with('success', 'Updated.');
    }

    public function update_password(Request $request)
    {
        return redirect()->back()->with('success', 'Updated.');
    }
    // public function update(Request $request, User $user)
    // {


    //     $user = auth()->user();
    //     if($request->password) {
    //         $user->update(['password' => Hash::make($request->password)]);
    //     }

    //     $oldEmail = $user->email;

    //     $user->update([
    //         'name' => $request->name,
    //         'institution_id' => $request->institution_id
    //     ]);

    //     if($oldEmail != $request->email) {
    //         $user->update([
    //             'email_verified_at' => null,
    //             'email' => $request->email,
    //         ]);
    //         $user->sendEmailVerificationNotification();
    //     }

    //     return redirect()->route('admin.profile.index')->with('success', 'Profile updated.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user_delete = User::where('id', Auth::id());
        $user_delete->delete();

        return redirect()->route('admin.index');
    }
}
