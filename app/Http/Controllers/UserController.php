<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if (Auth::check()){
            return view('user.home'); //proceed to home page if user is logged in
        }
        return view('user.index'); //proceed to landing page
    }
}
