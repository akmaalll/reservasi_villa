@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pembayaran</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Pembayaran</h4>
                            <div class="table-responsive">
                                <table class="table table-striped verticle-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Pelanggan</th>
                                            <th scope="col">Villa</th>
                                            <th scope="col">Check In</th>
                                            <th scope="col">Check Out</th>
                                            <th scope="col">Total Harga</th>
                                            <th scope="col">Status Pembayaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $v)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $v->pelanggan->nama }}</td>
                                                <td>{{ $v->villa->nama }}</td>
                                                <td>
                                                    {{ $v->check_in instanceof \Carbon\Carbon ? $v->check_in->format('Y-m-d') : $v->check_in }}
                                                </td>
                                                <td>
                                                    {{ $v->check_out instanceof \Carbon\Carbon ? $v->check_out->format('Y-m-d') : $v->check_out }}
                                                </td>
                                                <td>{{ $v->total_harga }}</td>
                                                <td>
                                                    <button class="btn mb-1 btn-rounded btn-danger">{{ $v->payment_status }}
                                                    </button>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i>
                                                        </a><a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Close"><i
                                                                class="fa fa-close color-danger"></i></a></span>
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
@endsection
