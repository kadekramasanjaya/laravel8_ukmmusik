@extends('layout.profile')


@section('content')
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Succes!</h5>
            {{ session('pesan') }}.
        </div>

    @endif
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Anggota UKM Musik Undiksha</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Anggota</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <br><i></i>UKM Musik Undiksha
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-8 invoice-col">
                                <address>
                                    <strong>Sekretariat</strong><br>
                                    Jl. Udayana No. 11<br>
                                    Banyuasri, Kec. Buleleng, Kabupaten Buleleng, Bali<br>
                                    Di Belakang Sekre BEM REMA Undiksha<br>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-2 invoice-col">
                                <address>
                                    <img src="{{ asset('template/') }}/dist/img/logoukm.png" class="img-circle"
                                        width="100px" alt="User Image">
                                </address>
                            </div>
                            <div class="col-sm-1 invoice-col">
                                <address>
                                    <img src="{{ asset('template/') }}/dist/img/logoundiksha.png" class="img-circle"
                                        width="105px" alt="User Image">
                                </address>
                            </div>
                        </div>
                        <!-- /.row -->
                        {{-- Table --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Nim</th>
                                    <th>Prodi</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($mahasiswaukmmusikundiksha as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->prodi }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td><img src="{{ url('foto_mahasiswa/' . $data->foto) }}" width="80px">
                                        </td>
                                        <td>
                                            <a href="/mahasiswaukmmusikundiksha/detailmahasiswa/{{ $data->id_mahasiswa }}"
                                                class="btn btn-sm btn-succes">Detail</a>
                                            <a href="/mahasiswaukmmusikundiksha/editmahasiswa/{{ $data->id_mahasiswa }}   "
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#delete{{ $data->id_mahasiswa }}">DELETE</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- End Table --}}
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="/mahasiswaukmmusikundiksha/addmahasiswa" class="btn btn-primary btn-sm">Add</a>
                                <br>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    @foreach ($mahasiswaukmmusikundiksha as $data)


        <div class="modal fade" id="delete{{ $data->id_mahasiswa }}">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $data->nama }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Mau Dihapus?&hellip;</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                        <a href="/mahasiswaukmmusikundiksha/delete/{{ $data->id_mahasiswa }}"
                            class="btn btn-outline-light">Yes</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    @endforeach
@endsection
