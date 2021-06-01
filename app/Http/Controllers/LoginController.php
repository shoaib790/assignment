<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register_form()
    {
        return view('register');
    }

    public function register(Request $request){

        // Validate
        $request->validate([
            'name'   => 'required|alpha',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|confirmed|min:6',
        ]);

        // User store
        $user_store       = new User();
        $user_store->name  = $request->name;
        $user_store->email = $request->email;
        $user_store->password = Hash::make($request->password);
        $user_store->save();

        return redirect()->route('login');

    }

    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
