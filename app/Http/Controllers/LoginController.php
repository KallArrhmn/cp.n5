<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if(Auth::user()->role == 'siswa') {
                return redirect()->route('dashboard-siswa');
            } elseif(Auth::user()->role == 'guru') {
                return redirect()->route('dashboard-guru');
            } elseif(Auth::user()->role == 'kepala_sekolah') {
                return redirect()->route('dashboard-kepsek');
            }
        }

        return redirect()->route('login');
    }
}