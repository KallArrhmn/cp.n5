<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <title> {{ $title }} </title>

</head>

<body>

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
                <input type="text" placeholder="Enter your Username">
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
                    <div class="register-title "style="text-align: center;"">
                        Register CP
                    </div>
                    <div class="school-info" style="text-align: center; font-size: 13px">
                        SMKN 5 Kab. Tangerang
                    </div>
                </div>
                <img src="{{ asset('assets/images/logo-banten.png') }}" alt="Right Logo" class="right-logo">
            </div>
            <form action="#">
                <input type="text" placeholder="Enter your Username ">
                <input type="password" placeholder="Create a Password">
                <input type="password" placeholder="Confirm your password">
                <input type="button" class="button" value="Register">
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/master.js') }}">
        < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity = "sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin = "anonymous" >
    </>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
