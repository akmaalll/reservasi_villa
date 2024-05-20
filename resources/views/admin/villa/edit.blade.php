@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Villa > Tambah Data</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Data Villa</h4>

                            <div class="form-validation">
                                <form class="form-valide" action="{{ route('update.villa', $data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <input type="hidden" value="{{ $data->gambar }}" name="gambarLama">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Nama<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" value="{{ $data->nama }}"
                                                id="val-username" name="nama" placeholder="Masukkan Nama..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Deskripsi<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" value="{{ $data->deskripsi }}"
                                                id="val-username" name="deskripsi" placeholder="Masukkan Deskripsi..">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Gambar<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="file" class="form-control" id="val-username" name="gambar"
                                                placeholder="Masukkan Gambar..">
                                        </div>
                                        <div class="col-md-2">

                                            <img class="img-thumbnail" src="{{ asset('images/villa/' . $data->gambar) }}"
                                                width="100" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Harga <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" value="{{ $data->harga }}"
                                                id="val-username" name="harga" placeholder="Masukkan Harga..">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-lg-8 ml-auto">
                                            <a href="/adminn/tamu">
                                                <button class="btn btn-danger">Kembali</button>
                                            </a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
                                                                                                                Content body end
                                                                                                            ***********************************-->


        <!--**********************************
                                                                                                                Footer start
                                                                                                            ***********************************-->
        <!--**********************************
                                                                                                                Footer end
                                                                                                                ***********************************-->
        {{-- <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div> --}}
    </div>
@endsection
