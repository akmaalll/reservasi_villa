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
                            <li><a href="{{ route('user.reservasi') }}" class="active">Home</a></li>
                            <li><a href="{{ route('user.villa') }}">Villa</a></li>
                            <li><a href="{{ route('user.profil') }}">Profile</a></li>
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
                    <h3>Profile</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section best-deal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                    aria-labelledby="appartment-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <h4>Informasi Pengguna</h4>
                                            <div class="info-table">
                                                <ul>
                                                    <li>Nama: <span>{{ Auth::guard('pelanggan')->user()->nama }}</span>
                                                    </li>
                                                    <li>No KTP:
                                                        <span>{{ Auth::guard('pelanggan')->user()->ktp }}</span>
                                                    </li>
                                                    <li>Alamat:
                                                        <span>{{ Auth::guard('pelanggan')->user()->alamat }}</span>
                                                    </li>
                                                    <li>No Hp:
                                                        <span>{{ Auth::guard('pelanggan')->user()->no_hp }}</span>
                                                    </li>
                                                    <li>Username:
                                                        <span>{{ Auth::guard('pelanggan')->user()->username }}</span>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('logout') }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-danger"
                                                                type="submit">Logout</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <h4>Data Reservasi</h4>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Check In</th>
                                                        <th scope="col">Check Out</th>
                                                        <th scope="col">Total Harga</th>
                                                        <th scope="col">Metode Pembayaran</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($reservasi as $index => $res)
                                                        <tr>
                                                            <th scope="row">{{ $index + 1 }}</th>
                                                            <td>{{ $res->check_in }}</td>
                                                            <td>{{ $res->check_out }}</td>
                                                            <td>{{ $res->total_harga }}</td>
                                                            <td>{{ $res->metode_pembayaran }}</td>
                                                            <td>
                                                                @if ($res->payment_status == 'belum_bayar')
                                                                    <button class="btn btn-danger" disabled>Belum
                                                                        Bayar</button>
                                                                @else
                                                                    <button class="btn btn-success" disabled>Sudah
                                                                        Bayar</button>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

</body>

</html>
