@extends('layout.profile')


@section('content')
    <form action="/mahasiswaukmmusikundiksha/updatemahasiswa/{{ $mahasiswaukmmusikundiksha->id_mahasiswa }}" method="POST"
        enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Anggota</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input name="nama" class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ $mahasiswaukmmusikundiksha->nama }}">
                                <div class="text-danger">
                                    @error('nama')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nim</label>
                                <input name="nim" class="form-control @error('nim') is-invalid @enderror"
                                    value="{{ $mahasiswaukmmusikundiksha->nim }}">
                                <div class="text-danger">
                                    @error('nim')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Prodi</label>
                                <input name="prodi" class="form-control @error('prodi') is-invalid @enderror"
                                    value="{{ $mahasiswaukmmusikundiksha->prodi }}">
                                <div class="text-danger">
                                    @error('prodi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input name="jabatan" class="form-control @error('jabatan') is-invalid @enderror"
                                    value="{{ $mahasiswaukmmusikundiksha->jabatan }}">
                                <div class="text-danger">
                                    @error('jabatan')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Status</label>
                                <input name="status" class="form-control @error('status') is-invalid @enderror"
                                    value="{{ $mahasiswaukmmusikundiksha->status }}">
                                <div class="text-danger">
                                    @error('status')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm 12">
                            <div class="col-sm-2">
                                <img src="{{ url('foto_mahasiswa/' . $mahasiswaukmmusikundiksha->foto) }}" width="400px">
                            </div>
                            <div class="col-sm-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label> Ganti Foto Mahasiswa</label>
                                        <input type="file" name="foto"
                                            class="form-control @error('foto') is-invalid @enderror">
                                        <div class="text-danger">
                                            @error('foto')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
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
