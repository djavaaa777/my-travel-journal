<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function onRegister(Request $request){
        $valid = $request->validate([
            "name" => "required|string|min:2|max:20",
            "email" => "required|unique:users,email|email|min:5|max:30",
            "password" => "required|min:5|confirmed",
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('home');
    }

    public function login(){
        return view('login');
    }

    public function onLogin(Request $request){
        $credentials = $request->validate([
            "email" => "required|email|min:5|max:30",
            "password" => "required|min:5",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->onlyInput('email');
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
