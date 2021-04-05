@extends('layout.profile')


@section('content')
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($dashboard as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->prodi }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td><img src="{{ url('foto_mahasiswa/' . $data->foto) }}" width="80px">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- End Table --}}
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());

    </script>
    </body>

    </html>

@endsection
