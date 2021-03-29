@extends('layout.profile')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DOKUMENTASI UKM MUSIK UNDIKSHA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dokumentasi</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
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
                                    <img class="img-fluid mb-3" src="{{ asset('template/') }}/dist/img/1.jpg" alt="Photo">
                                    <img class="img-fluid" src="{{ asset('template/') }}/dist/img/2.jpg" alt="Photo">
                                    <img class="img-fluid mb-3" src="{{ asset('template/') }}/dist/img/3.jpg" alt="Photo">
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

@endsection
