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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $institutions = Institution::all();
        return view('admin.profile', compact('user', 'institutions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {


        $user = auth()->user();
        if($request->password) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        $oldEmail = $user->email;

        $user->update([
            'name' => $request->name,
            'institution_id' => $request->institution_id
        ]);

        if($oldEmail != $request->email) {
            $user->update([
                'email_verified_at' => null,
                'email' => $request->email,
            ]);
            $user->sendEmailVerificationNotification();
        }

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated.');
    }

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
