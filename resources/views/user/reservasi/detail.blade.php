<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Reservasi Penyewaan villa</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('appearance/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('appearance/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('appearance/assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('appearance/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('appearance/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--
  

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->

    {{-- modal --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('appearance/modal/fonts/icomoon/style.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('appearance/modal/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('appearance/modal/css/style.css') }}">
</head>

<body>
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa fa-envelope"></i> info@company.com</li>
                        <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h1>Reservasi </h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('user.reservasi') }}" class="active">Home</a></li>
                            <li><a href="{{ route('user.villa') }}">Villa</a></li>
                            <li><a href="{{ route('user.profil') }}">Profile</a></li>
                            <li>
                                {{-- <a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a> --}}
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Home</a> / Single Property</span>
                    <h3>Single Property</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-body py-0">
                    <div class="d-flex main-content">
                        <div class="bg-image promo-img mr-3"
                            style="background-image: url('appearance/modal/images/img_1.jpg');">
                        </div>
                        <div class="content-text p-4">
                            <h3>Reservation form</h3>

                            <form action="{{ route('user.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="pelanggan_id"
                                    value="{{ Auth::guard('pelanggan')->user()->id }}">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="mm">Check In</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" id="" name="check_in"
                                            placeholder="Masukkan Tanggal Masuk..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="mm">Check Out</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" id="" name="check_out"
                                            placeholder="Masukkan Tanggal Keluar..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fname">Villa</label>
                                    <select class="form-control" name="villa_id" id="val-skill">
                                        <option value="{{ $villa->id }}">{{ $villa->nama }}</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="name">Metode Pembayaran</label>
                                    <select class="form-control" name="payment_status" id="val-skill">
                                        <option>-- Pilih Metode Pembayaran --</option>
                                        <option value="tunai">Tunai</option>
                                        <option value="transfer">Transfer</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="single-property section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-image">
                        <img src="{{ asset('images/villa/' . $villa->gambar) }}" alt="">
                    </div>
                    <div class="main-content">
                        <span class="category">Villa</span>
                        <h4>{{ $villa->nama }}</h4>
                        <p>{{ $villa->deskripsi }}
                        </p>
                    </div>
                    <div class="icon-button mt-5">
                        <button type="button" class="btn btn-secondary mb-5" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            <i class="fa fa-calendar"></i>
                            Schedule a visit
                        </button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-table">
                        <ul>
                            <li>
                                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                                <h4>450 m2<br><span>Total Flat Space</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                                <h4>Contract<br><span>Contract Ready</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                                <h4>Payment<br><span>Payment Process</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                                <h4>Safety<br><span>24/7 Under Control</span></h4>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.

                    Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a>
                    Distribution:
                    <a href="https://themewagon.com">ThemeWagon</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('appearance/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('appearance/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('appearance/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('appearance/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('appearance/assets/js/counter.js') }}"></script>
    <script src="{{ asset('appearance/assets/js/custom.js') }}"></script>

    {{-- modal --}}
    <script src="{{ asset('appearance/modal/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('appearance/modal/js/popper.min.js') }}"></script>
    <script src="{{ asset('appearance/modal/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('appearance/modal/js/main.js') }}"></script>

</body>

</html>
