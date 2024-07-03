<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Volunteer;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginStore(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->route('dashboard.index')->withSuccess('Signed in');
    }
    
    return redirect()->route('login')->with('error', 'Email atau password salah.');
}

    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
