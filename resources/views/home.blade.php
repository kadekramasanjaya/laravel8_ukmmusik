@extends('layout.profile')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

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

                            <p class="text-muted text-center">Unit Kegiatan Mahasiswa Universitas Pendidikan Ganesha
                            </p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Anggota</b> <a class="float-right">2.542</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Demisioner</b> <a class="float-right">2.002</a>
                                </li>
                            </ul>

                            <a href="/mahasiswaukmmusikundiksha" class="btn btn-primary btn-block"><b>Lihat
                                    Data Anggota</b></a>
                            <a href="https://www.youtube.com/channel/UCfu71I017i34M2gRIE6onKw"
                                class="btn btn-danger btn-block"><b>Lihat Data Demisioner</b></a>
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
                            <strong><i class="fas fa-book mr-1"></i>Sekretariat</strong>

                            <p class="text-muted">
                                Universitas Pendidikan Ganesha
                                Belakang Sekretariat BEM REMA Undiksha
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i>Lokasi</strong>

                            <p class="text-muted">Singaraja, Buleleng, Bali</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i>Keterampilan</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">Musik dan Organisasi</span>
                            </p>

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i>Quetes</strong>

                            <p class="text-muted">Berkaryalah sebanyak banyaknya, karena kita tidak pernah tau
                                kapan karya itu akan buming.</p>
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
                                <li><a class="nav-link active" data-toggle="tab">Dokumentasi</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <!-- /.col -->
                                    <div class="col-sm-16">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('template/') }}/dist/img/logoukm.png" alt="Photo">
                                                <img class="img-fluid" src="{{ asset('template/') }}/dist/img/2.jpg"
                                                    alt="Photo">
                                                <img class="img-fluid mb-3" src="{{ asset('template/') }}/dist/img/3.jpg"
                                                    alt="Photo">
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.post -->
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
