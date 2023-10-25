@extends('layout.index')

@section('content')

<div class="registration form">
    <div class="logo-container">
        <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="Left Logo" class="left-logo">
        <div class="login-container">
            <div class="login-title" style="text-align: center;">
                Register CP
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
        <input type="password" placeholder="Konfirmasi Password">
        <button type="button" class="btn btn-primary col-sm-12">Register</button>
        <p class="m-auto text-center p-2" style="font-size: 12px">Sudah punya akun? <a href="{{ route('login') }}">Login
                Sekarang</a></p>
    </form>
</div>

@endsection
