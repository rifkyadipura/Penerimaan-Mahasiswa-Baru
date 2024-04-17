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
                <div class="card-body">
                    <div class="form-group">
                        <a href="{{ route('home.pendaftar') }}" class="btn btn-sm btn-info"><span class="fa fa-home"></span> Home</a>
                    </div>
                    <!-- Profile content goes here -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Profile picture -->
                            <div class="text-center">
                                @if($pendaftar && $pendaftar->foto_diri)
                                    <a href="{{ asset('pas_foto/' . $pendaftar->foto_diri) }}" target="_blank" class="d-block">
                                        <img src="{{ asset('pas_foto/' . $pendaftar->foto_diri) }}" class="img-thumbnail img-fluid" style="height: 220px; object-fit: cover" alt="Foto Diri">
                                    </a>
                                @else
                                    <p>Foto tidak tersedia karena data pendaftar belum diisi.</p>
                                @endif
                                <div class="mt-3">
                                    @if($pendaftar)
                                        <form action="{{ route('profile.update', $pendaftar->pendaftar_id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group">
                                                <input type="file" name="foto_diri" accept="image/*" class="form-control">
                                                <button type="submit" class="btn btn-primary ml-2" onclick="return confirm('Apakah Anda yakin untuk mengganti foto profile?')">Upload</button>
                                            </div>
                                        </form>
                                    @else
                                        <p>Silahkan isi Biodata.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <!-- Profile information -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Profile</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $pendaftar ? $pendaftar->name : '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="keterangan">Jenis Kelamin *</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $pendaftar ? $pendaftar->jenis_kelamin : '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{ $pendaftar ? $pendaftar->email : '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>No Telp</label>
                                                <input type="number" class="form-control" name="no_telp" id="no_telp" value="{{ $pendaftar ? $pendaftar->no_telp : '' }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
