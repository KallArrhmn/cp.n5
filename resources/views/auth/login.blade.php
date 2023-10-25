@extends('layout.index')

@section('content')
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <div class="logo-container">
                <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="Left Logo" class="left-logo">
                <div class="login-container">
                    <div class="login-title" style="text-align: center;">
                        Login CP
                    </div>
                    <div class="school-info" style="text-align: center; font-size: 13px">
                        SMKN 5 Kab. Tangerang
                    </div>
                </div>
                <img src="{{ asset('assets/images/logo-banten.png') }}" alt="Right Logo" class="right-logo">
            </div>
            <form action="#">
                <input type="text" placeholder="Enter your email">
                <input type="password" placeholder="Enter your password">
                <select id="roleSelect">
                    <option value="" disabled selected>Select Account As ..</option>
                    <option value="">Siswa</option>
                    <option value="">Guru</option>
                    <option value="">Kepala Sekolah</option>
                </select>
                <a href="#">Forgot password?</a>
                <input type="button" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <div class="logo-container">
                <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="Left Logo" class="left-logo">
                <div class="login-container">
                    <div class="login-title" style="text-align: center;">
                        Register     CP
                    </div>
                    <div class="school-info" style="text-align: center; font-size: 13px">
                        SMKN 5 Kab. Tangerang
                    </div>
                </div>
                <img src="{{ asset('assets/images/logo-banten.png') }}" alt="Right Logo" class="right-logo">
            </div>
            <form action="#">
                <input type="text" placeholder="Enter your email">
                <input type="password" placeholder="Create a password">
                <input type="password" placeholder="Confirm your password">
                <select id="roleSelect">
                    <option value="" disabled selected>Select Account As ..</option>
                    <option value="">Siswa</option>
                    <option value="">Guru</option>
                    <option value="">Kepala Sekolah</option>
                </select>
                <input type="button" class="button" value="Signup">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>
@endsection
