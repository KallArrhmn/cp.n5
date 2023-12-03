<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('auth.login', [
            'title'    =>'Login',
        ]);
    }

    public function login_aplikasi()
    {
        return view('Login.login_aplikasi', [
            'title'    =>'Login_aplikasi',
        ]);
    }

    public function register_aplikasi()
    {
        return view('Login.register_aplikasi', [
            'title'    =>'Register_aplikasi',
        ]);
    }
    public function reset_password()
    {
        return view('Login.reset_password', [
            'title'    =>'Reset_password',
        ]);
    }

    public function dashboard_siswa()
    {
        return view('component.dashboard-siswa', [
            'title'    =>'Dashboard-siswa',
        ]);
    }

    public function dashboard_guru()
    {
        return view('dashboard-guru.dashboard-guru', [
            'title'    =>'Dashboard-guru',
        ]);
    }

    public function kelas10() 
    {
        return view('dashboard-siswa.kelas.kelas 10.kelas10', [
            'title' =>'kelas10',
        ]);
    }
}
