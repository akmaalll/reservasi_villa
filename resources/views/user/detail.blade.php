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
</head>

<body>

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
                        <a href="{{ route('login') }}"><i class="fa fa-calendar"></i> Schedule a visit</a>
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

                    Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution:
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

</body>

</html>
