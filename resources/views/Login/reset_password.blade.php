<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CP | SMKN 5 Kab Tng</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-color: #190482">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body" style="border-radius: 30px">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <img src="{{ asset('assets/images/LOGO-NEW-SMKN5.png') }}" alt="" width="50px">
                    <div class="login-container">
                        <h3 class="login-title text-center p-1">
                            <strong>Reset</strong>
                        </h3>
                        <h3 class="school-info" style="font-size: 16px;">
                            <strong>SMKN 5 Kab. Tangerang</strong>
                        </h3>
                    </div>
                    <img src="{{ asset('assets/images/logo-banten.png') }}" alt="" width="50px">
                </div>

                <form action="{{ asset('adminlte') }}" method="post">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Enter the old password ">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Enter a new password ">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" style="margin-bottom: 20px">
                            <button href="#" type="submit" name="submit"
                                class="btn btn-success col-sm-12">Reset
                            </button>
                        </div>
                        <div class="col-12" style="margin-bottom: 20px">
                            <button href="#" type="submit" name="submit"
                                class="btn btn-danger col-sm-12">Cancell
                            </button>
                        </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte') }}/dist/js/adminlte.min.js"></script>
</body>

</html>
