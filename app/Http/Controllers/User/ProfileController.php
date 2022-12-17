<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //view functions
    public function index()
    {
        return view('user.profile.index');
    }

    public function edit_name(){
        return view('user.profile.edit-name');
    }

    public function edit_email(){
        return view('user.profile.edit-email');
    }

    public function edit_institution(){
        return view('user.profile.edit-institution');
    }

    public function edit_password(){
        return view('user.profile.edit-password');
    }

    //update functions

    public function update_name(Request $request){
        return redirect()->back()->with('success', 'Updated name.');
    }

    public function update_email(Request $request){
        return redirect()->back()->with('success', 'Updated email.');
    }

    public function update_institution(Request $request){
        return redirect()->back()->with('success', 'Updated institution.');
    }

    public function update_password(Request $request){
        return redirect()->back()->with('success', 'Updated password.');
    }


    //delete user
    public function destroy(User $user)
    {
        //
    }
}
