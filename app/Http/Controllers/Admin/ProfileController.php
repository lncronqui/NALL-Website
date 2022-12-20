<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
        $institutions = Institution::all();
        return view('admin.profile.edit-institution', compact('institutions'));
    }

    public function edit_password()
    {
        return view('admin.profile.edit-password');
    }

    public function update_name(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldName' => 'required|exists:users,name',
            'newName' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $user = User::find(Auth::id());
        $user->name = $validated['newName'];
        $user->save();

        return redirect(route('admin.profile.index'))->with('success', 'Updated name.');
    }

    public function update_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            'newEmail' => 'required|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $user = User::find(Auth::id());

        $user->email = $validated['newEmail'];
        $user->email_verified_at = null;
        $user->save();

        $user->sendEmailVerificationNotification();

        return redirect(route('admin.profile.index'))->with('success', 'Updated email.');
    }

    public function update_institution(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'institution' => 'required|exists:institution,id',
            'newInstitution' => 'required|exists:institution,id'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $user = User::find(Auth::id());
        $user->institution_id = $validated['newInstitution'];
        $user->save();

        return redirect(route('admin.profile.index'))->with('success', 'Updated institution.');
    }

    public function update_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required',
            'newPassword' => ['required', 'confirmed', Password::min(8)]
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!Hash::check($validator['newPassword'], auth()->user()->password)) {
            return redirect()->back()->withErrors('Old password was not inputted correctly.');
        }

        $validated = $validator->validated();

        $user = User::find(Auth::id());
        $user->password = Hash::make($validated['newPassword']);
        $user->save();

        return redirect(route('admin.profile.index'))->with('success', 'Updated password.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (Auth::id() == $user->id) {
            Auth::logout();

            $deleted = $user->delete();
        } else {
            return redirect()->back()->withErrors('Error on deletion.');
        }

        if ($deleted) {
            return redirect(route('admin.login'))->with('success', 'User account deleted successfully.');
        } else {
            Auth::login($user);

            return redirect()->back()->withErrors('Failed to delete your account.');
        }
    }
}
