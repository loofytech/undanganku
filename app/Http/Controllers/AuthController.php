<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        if (Auth::user()) {
            return redirect()->route("dashboard");
        }

        return view("auth.login");
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->route("login");
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            "username" => ["required"],
            "password" => ["required"],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route("dashboard");
        }

        return back()->withErrors([
            "email" => "The provided credentials do not match our records.",
        ])->onlyInput("email");
    }

    public function checkUser(Request $request) {
        $auth = Auth::check();
        if (!$auth) return redirect()->route("login");

        $user = Auth::user();
        if ($user->role == 1) return redirect()->route("dashboard.admin");
        if ($user->role == 2) return redirect()->route("dashboard.user");
    }
}
