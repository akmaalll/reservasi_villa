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
                            <li><a href="{{ route('user') }}" class="active">Home</a></li>
                            <li><a href="{{ route('villa') }}">Villa</a></li>
                            <li>
                                <button type="button" class="btn btn-secondary mb-5" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    <i class="fa fa-calendar"></i>
                                    Schedule a visit
                                </button>
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
                    <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
                    <h3>Properties</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section properties">
        <div class="container">
            <div class="row properties-box">
                @foreach ($villa as $v)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                        <div class="item">
                            <img src="{{ asset('images/villa/' . $v->gambar) }}" alt="">
                            <span class="category">{{ $v->nama }}</span>
                            <h6>{{ $v->harga }}</h6>
                            <h4><a href="property-details.html">alamat</a></h4>
                            <p>{{ $v->deskripsi }}</p>
                            <div class="main-button">
                                <a href="{{ route('detail', $v->id) }}">Detail Villa</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a class="is_active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
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
