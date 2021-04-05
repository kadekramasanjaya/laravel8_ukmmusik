@extends('layout.profile')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('template/') }}/dist/img/logoukm.png" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">UKM MUSIK UNDIKSHA</h3>

                            <p class="text-muted text-center">Universitas Pendidikan Ganesha</p>

                            <a href="mahasiswaukmmusikundiksha/addmahasiswa" class="btn btn-primary btn-block"><b>Tambah
                                    Anggota</b></a>
                            <a href="demisionerukmmusikundiksha/adddemisioner" class="btn btn-danger btn-block"><b>Tambah
                                    Demisioner</b></a>
                            <a href="mahasiswaukmmusikundiksha/addmahasiswa" class="btn btn-succes btn-block"><b>Tambah
                                    Peminjaman</b></a>
                            <a href="mahasiswaukmmusikundiksha/addmahasiswa" class="btn btn-secondary btn-block"><b>Tambah
                                    Pengembalian</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tentang Kami</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>Pembina UKM MUSIK UNDIKSHA</strong>
                            <p class="text-muted">
                                I Kadek Happy Kardiawan, S.Pd.,M.Pd
                            </p>

                            <hr>

                            <strong><i class="fas fa-book mr-1"></i>Ketua UKM MUSIK UNDIKSHA</strong>
                            <p class="text-muted">
                                Dewa Ayu Kartika Prasanti
                            </p>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i>Wakil Ketua UKM MUSIK UNDIKSHA</strong>
                            <p class="text-muted">Ketut Nova Ariana</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Sekretaris 1</strong>
                            <p class="tect-muted">Made Yoga Arya Wiguna</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Sekretaris 2</strong>
                            <p class="text-muted">Ayu Kris Utari Dewi Alit M</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Bendahara 1</strong>
                            <p class="text-muted">Komang Okta Kurniawan</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Bendahara 2</strong>
                            <p class="text-muted">Ni Putu Apriliani Purnami Dewi</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Koordinator Bidang 1</strong>
                            <p class="text-muted">Alfiyan Irsyad Thoyyib</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Koordinator Bidang 2</strong>
                            <p class="text-muted">Ketut Tutur Diatmika</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Koordinator Bidang 3</strong>
                            <p class="text-muted">I Ketut Rama Pradipta</p>
                            <strong><i class="fas fa-file-alt mr-1"></i>Koordinator Bidang 4</strong>
                            <p class="text-muted">Gilang Aditya Oka Pratama</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#mahasiswa" data-toggle="tab">Anggota
                                        UKM MUSIK UNDIKSHA</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active  tab-pane" id="mahasiswa">
                                    <!-- The timeline -->
                                    <div class="">
                                        <div>
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
                                                            <td><img src="{{ url('foto_mahasiswa/' . $data->foto) }}"
                                                                    width="80px">
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <a href="/dashboard/dashboardprintpdf" target="_blank" class="btn btn-primary">Print PDF</a>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- jQuery -->
    <script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/') }}/dist/js/demo.js"></script>
    </body>
@endsection
