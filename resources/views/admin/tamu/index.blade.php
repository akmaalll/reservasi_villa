@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tamu</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Tamu</h4>
                            <a href="/create/transaksi">
                                <button class="btn btn-primary mb-3">Tambah Tamu</button>
                            </a>
                            <div class="table-responsive">
                                <table class="table table-striped verticle-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">No KTP</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No Hp</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>user</td>
                                            <td>123</td>
                                            <td>1010101010</td>
                                            <td>admin</td>
                                            <td>makassar</td>
                                            <td>0987654321</td>
                                            <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a
                                                        href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
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
