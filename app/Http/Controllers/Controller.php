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

    public function register()
    {
        return view('auth.register', [
            'title'    =>'Register',
        ]);
    }

    public function dashboard_siswa()
    {
        return view('component.dashboard-siswa', [
            'title'    =>'Dashboard-siswa',
        ]);
    }
}
