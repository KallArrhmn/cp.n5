<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


// Khusus Guru dan Kepsek Controller
    public function dashboard2()
    {
        return view('dashboard.khusus.dashboard_guru_kepsek', [
            'title'     => 'dashboard2',
        ]);
    }

// Akhir Route Guru dan Kepsek

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
    // public function reset_password()
    // {
    //     return view('Login.reset_password', [
    //         'title'    =>'Reset_password',
    //     ]);
    // }
    public function dashboard()
    {
        return view('dashboard.dashboard_siswa', [
            'title'     => 'dashboard1',
        ]);
    }
    

    public function kelas12rpl1()
    {
        return view('dashboard.kelas12rpl1', [
            'title'     => '12rpl1',
        ]);
    }

    public function kelas12rpl2()
    {
        return view('dashboard.kelas12rpl1', [
            'title'     => '12rpl2',
        ]);
    }
}
