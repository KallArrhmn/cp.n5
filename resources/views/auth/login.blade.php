@extends('auth.index')

@section('content')
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <div class="logo-container">
                <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="Left Logo" class="left-logo">
                <div class="login-container">
                    <h3 class="login-title text-center p-3">
                        Login
                    </h3>
                    <h3 class="school-info " style="font-size: 16px;">
                        SMKN 5 Kab. Tangerang
                    </h3>
                </div>
                <img src="{{ asset('assets/images/logo-banten.png') }}" alt="Right Logo" class="right-logo">
            </div>
            <form action="#" method="post">
                @csrf
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <select id="role">
                    <option value="" disabled selected>Pilih akun sebagai ..</option>
                    <option value="">Siswa</option>
                    <option value="">Guru</option>
                    <option value="">Kepala Sekolah</option>
                </select>
                <a href="#">Reset Password</a>
                <button  href="#" type="submit" name="submit" class="btn btn-success col-sm-12">Login</button>
            </form>
            <div class="signup">
                <span class="signup">Belum punya akun?
                    <a href="{{Route('register')}}" for="check">Daftar sekarang</a>
                </span>
            </div>
        </div>
    </div>
@endsection
