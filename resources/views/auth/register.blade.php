<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">

                                <a class="text-center" href="index.html">
                                    <h4>REGISTRASI</h4>
                                </a>

                                <form class="mt-5 mb-5 login-input" action="{{ route('store.register') }}"
                                    method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control"
                                            placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="ktp" class="form-control" placeholder="No KTP"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="no_hp" class="form-control"
                                            placeholder="No Handphone" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                            required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Register</button>
                                </form>
                                <p class="mt-5 login-form__footer">Sudah Punya Akun <a href="{{ route('login') }}"
                                        class="text-primary">Login </a> sekarang</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/gleek.js') }}"></script>
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
</body>

</html>
