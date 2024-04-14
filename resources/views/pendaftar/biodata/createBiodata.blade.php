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
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Biodata</h3>
                </div>
                <form action="{{ route('biodata.simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="keterangan">Jenis Kelamin *</label>
                                    <select name="jenis_kelamin" class="form-select" required>
                                        <option>Pilih</option>
                                        <option value="Laki-laki" {{ (old('Laki-laki') == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ (old('Perempuan') == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="number" class="form-control" name="nisn" id="nisn" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="number" class="form-control" name="nik" id="nik" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Lahir</label>
                                    <input type="date" class="form-control" name="lahir" id="lahir" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" class="form-select" required>
                                        <option>Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="number" class="form-control" name="no_telp" id="no_telp" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="foto_diri">Pas Foto</label>
                                    <input type="file" class="form-control" name="foto_diri" id="foto_diri" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="program_studi">Program Studi</label>
                                    <select name="program_studi" class="form-select" required>
                                        <option>Pilih</option>
                                        <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                                        <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                        <option value="D4 Manajemen Bisnis">D4 Manajemen Bisnis</option>
                                        <option value="D3 Manajemen Bisnis">D3 Manajemen Bisnis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="program_studi2">Program Studi ke 2</label>
                                    <select name="program_studi2" class="form-select" required>
                                        <option>Pilih</option>
                                        <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                                        <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                        <option value="D4 Manajemen Bisnis">D4 Manajemen Bisnis</option>
                                        <option value="D3 Manajemen Bisnis">D3 Manajemen Bisnis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="jalur_masuk">Jalur Masuk</label>
                                    <select name="jalur_masuk" class="form-select" required>
                                        <option>Pilih</option>
                                        <option value="Test">Test</option>
                                        <option value="Undangan">Undangan</option>
                                        <option value="Beasiswa">Beasiswa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 10px;">
                        <button type="submit" class="btn btn-success">SUBMIT</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
