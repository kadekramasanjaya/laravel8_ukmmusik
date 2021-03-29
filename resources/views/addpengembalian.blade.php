@extends('layout.profile')


@section('content')
    <form action="/pengembalian/insertpengembalian" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Barang</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror"
                                    value="{{ old('nama_barang') }}">
                                <div class="text-danger">
                                    @error('nama_barang')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama pengembali</label>
                                <input name="nama_pengembali"
                                    class="form-control @error('nama_pengembali') is-invalid @enderror"
                                    value="{{ old('nama_pengembali') }}">
                                <div class="text-danger">
                                    @error('nama_pengembali')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                                    value="{{ old('tanggal') }}">
                                <div class="text-danger">
                                    @error('tanggal')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Foto Pengembalian</label>
                                <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                                <div class="text-danger">
                                    @error('foto')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <button class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
