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
                            <a href="/adminn/tamu/create">
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
                                        @foreach ($data as $v)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $v->username }}</td>
                                                <td>{{ $v->password }}</td>
                                                <td>{{ $v->ktp }}</td>
                                                <td>{{ $v->nama }}</td>
                                                <td>{{ $v->alamat }}</td>
                                                <td>{{ $v->no_hp }}</td>
                                                <td>
                                                    <span>
                                                        <a href="{{ route('edit.pelanggan', $v->id) }}"
                                                            class="btn btn-warning" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action="{{ route('destroy.pelanggan', $v->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-close color-danger"></i>
                                                            </button>
                                                        </form>
                                                    </span>
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
