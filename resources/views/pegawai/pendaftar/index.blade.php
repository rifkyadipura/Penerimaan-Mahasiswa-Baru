@extends('layouts.app_home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>
    <!-- /.container-fluid -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <!-- ... (existing content) ... -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <!-- ... (existing content) ... -->
                <!-- /.card-body -->
                <div class="card-body">
                    <h3 class="box-title"><b>Data Pendaftar</b><br></h3>
                    <hr>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Calon Mahasiswa ULBI</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Lahir</th>
                                                <th>Jalur Masuk</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($pendaftar as $p):?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>{!! $p->name !!}</td>
                                                <td>{!! $p->nik !!}</td>
                                                <td>{!! $p->jenis_kelamin !!}</td>
                                                <td>{!! $p->lahir !!}</td>
                                                <td>{!! $p->jalur_masuk !!}</td>
                                                <td>{!! $p->keterangan !!}</td>
                                                <td>
                                                    <a href="verifikasi/{{ $p->pendaftar_id }}" class="btn btn-success">Verifikasi</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                            <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
