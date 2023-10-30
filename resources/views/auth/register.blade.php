@extends('auth.index')

@section('content')

<div class="register form">
    <div class="logo-container">
        <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="Left Logo" class="left-logo">
        <div class="login-container">
            <h3 class="login-title text-center p-3">
                Register
            </h3>
            <h3 class="school-info " style="font-size: 16px;">
                SMKN 5 Kab. Tangerang
            </h3>
        </div>
        <img src="{{ asset('assets/images/logo-banten.png') }}" alt="Right Logo" class="right-logo">
    </div>
    <form action="#">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <input type="password" placeholder="Konfirmasi Password">
        <a href="{{ route('login') }}" type="button" class="btn btn-success col-sm-12" style="color: white">Register</a>
    </form>
</div>

@endsection
