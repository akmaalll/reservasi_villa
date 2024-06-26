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
                            <form action="{{ route('index.reservasi') }}" method="GET">
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            value="{{ request('start_date') }}">
                                    </div>
                                    <div class="col-3">
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                            value="{{ request('end_date') }}">
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex gap-2">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                            <button type="button" class="btn btn-secondary" id="resetButton">Reset</button>
                                            <a href="{{ route('index.reservasi') }}" class="btn btn-primary">Tampilkan
                                                Semua</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
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
                                        @if (request('start_date') && request('end_date'))
                                            @foreach ($filteredData as $v)
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
                                                        @if ($v->payment_status == 'sudah_bayar')
                                                            <button class="btn mb-1 btn-rounded btn-success">Sudah
                                                                Bayar</button>
                                                        @else
                                                            <button class="btn mb-1 btn-rounded btn-danger">Belum
                                                                Bayar</button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#paymentStatusModal{{ $v->id }}"
                                                                class="btn btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fa fa-pencil"></i>
                                                            </a>
                                                            <form action="{{ route('destroy.reservasi', $v->id) }}"
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
                                        @else
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
                                                        @if ($v->payment_status == 'sudah_bayar')
                                                            <button class="btn mb-1 btn-rounded btn-success">Sudah
                                                                Bayar</button>
                                                        @else
                                                            <button class="btn mb-1 btn-rounded btn-danger">Belum
                                                                Bayar</button>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#paymentStatusModal{{ $v->id }}"
                                                                class="btn btn-warning" data-toggle="tooltip"
                                                                data-placement="top" title="Edit"><i
                                                                    class="fa fa-pencil"></i>
                                                            </a>
                                                            <form action="{{ route('destroy.reservasi', $v->id) }}"
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
                                                {{-- modal --}}
                                                <div class="modal fade" id="paymentStatusModal{{ $v->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="paymentStatusModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="paymentStatusModalLabel">Ubah
                                                                    Status
                                                                    Pembayaran</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('reservasi.update.status', $v->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="payment_status">Status
                                                                            Pembayaran</label>
                                                                        <select class="form-control" id="payment_status"
                                                                            name="payment_status">
                                                                            <option value="sudah_bayar"
                                                                                {{ $v->payment_status == 'sudah_bayar' ? 'selected' : '' }}>
                                                                                Sudah Bayar</option>
                                                                            <option value="belum_bayar"
                                                                                {{ $v->payment_status == 'belum_bayar' ? 'selected' : '' }}>
                                                                                Belum Bayar</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Tutup</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('resetButton').addEventListener('click', function() {
            document.getElementById('start_date').value = '';
            document.getElementById('end_date').value = '';
            document.getElementById('filterForm').submit();
        });
    </script>
@endsection
