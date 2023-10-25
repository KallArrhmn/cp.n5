@extends('layout.index')

@section('content')
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <div class="logo-container">
                <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="Left Logo" class="left-logo">
                <div class="login-container">
                    <div class="login-title" style="text-align: center;">
                        Login Credit Point
                    </div>
                    <div class="school-info" style="text-align: center; font-size: 13px">
                        SMKN 5 Kab. Tangerang
                    </div>
                </div>
                <img src="{{ asset('assets/images/logo-banten.png') }}" alt="Right Logo" class="right-logo">
            </div>
            <form action="#">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <select id="roleSelect">
                    <option value="" disabled selected>Pilih akun sebagai ..</option>
                    <option value="">Siswa</option>
                    <option value="">Guru</option>
                    <option value="">Kepala Sekolah</option>
                </select>
                <a href="#">Reset Password</a>
                <button type="button" class="btn btn-success col-sm-12">Login</button>
            </form>
            <div class="signup">
                <span class="signup">Belum punya akun?
                    <label for="check">Daftar sekarang</label>
                </span>
            </div>
        </div>
    </div>
@endsection
