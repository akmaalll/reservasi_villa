@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Tamu</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $pelanggan->count() }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Villa</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $villa->count() }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Transaksi Lunas</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $transaksi->where('payment_status', 'sudah_bayar')->count() }}
                                </h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">Pesanan</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $transaksi->count() }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
