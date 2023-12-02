<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
    public function login()
    {
        return view('admin.pages.login');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials) && auth()->user()->role == "admin") {
            // Authentication passed, and user has 'role' set to true
            return redirect()->intended('/category');
        }

        // Authentication failed or user doesn't have the required role
        return back()->withErrors(['email' => 'Invalid credentials or insufficient permissions']);
    }
}