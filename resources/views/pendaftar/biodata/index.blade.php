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
                    <div class="form-group">
                        @if ($pendaftar && $pendaftar->status == 1)
                            <!-- Display something specific for status 1 or do nothing -->
                        @else
                            <a href="{{ route('biodata.create') }}" class="btn btn-success"><span class="fa fa-close"></span> Buat Biodata</a>
                        @endif

                    </div>
                    @if ($pendaftar && $pendaftar->status == 1)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apa Anda Yakin Untuk Menghapus?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="{{ route('biodata.delete', $pendaftar->pendaftar_id) }}" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Biodata Calon Mahasiswa ULBI</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover table-striped text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NISN</th>
                                                    <th>NIK</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Lahir</th>
                                                    <th>Jalur Masuk</th>
                                                    <th>Program Studi Ke 1</th>
                                                    <th>Program Studi Ke 2</th>
                                                    <th>Keterangan</th>
                                                    <th> <center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td>{!! $pendaftar->name !!}</td>
                                                    <td>{!! $pendaftar->nisn !!}</td>
                                                    <td>{!! $pendaftar->nik !!}</td>
                                                    <td>{!! $pendaftar->jenis_kelamin !!}</td>
                                                    <td>{!! $pendaftar->lahir !!}</td>
                                                    <td>{!! $pendaftar->jalur_masuk !!}</td>
                                                    <td>{!! $pendaftar->program_studi !!}</td>
                                                    <td>{!! $pendaftar->program_studi2 !!}</td>
                                                    <td>{!! $pendaftar->keterangan !!}</td>
                                                    <td>
                                                        <a href="{{ route('biodata.show', $pendaftar->pendaftar_id) }}" class="btn btn-warning">Read</a>
                                                        <a href="{{ route('biodata.edit', $pendaftar->pendaftar_id) }}" class="btn btn-success">Edit</a>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Delete </button>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.row -->
                    @endif
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
