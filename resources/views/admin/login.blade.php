<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $user = $request->input('user');
        $pass = $request->input('password');

        if ($user === 'admin' && $pass === 'martina123') {
            session(['admin_logged' => true]);
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Credenciales incorrectas');
        }
    }

    public function dashboard()
    {
        if (!session('admin_logged')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('admin_logged');
        return redirect()->route('admin.login');
    }
}
