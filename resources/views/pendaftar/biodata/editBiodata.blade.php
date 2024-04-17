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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('biodata.index') }}" class="btn btn-sm btn-info"><span class="fa fa-close"></span> Kembali</a>
                        </div>
                        <form action="{{ route('biodata.update', $pendaftar->pendaftar_id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $pendaftar->pendaftar_id }}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $pendaftar->name }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="keterangan">Jenis Kelamin *</label>
                                        <select name="jenis_kelamin" class="form-select">
                                            <option>Pilih</option>
                                            <option value="Laki-laki" {{old('jenis_kelamin',$pendaftar->jenis_kelamin)=="Laki-laki"? 'selected':''}}>Laki-laki</option>
                                            <option value="Perempuan" {{old('jenis_kelamin',$pendaftar->jenis_kelamin)=="Perempuan"? 'selected':''}}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input type="number" class="form-control" name="nisn" id="nisn" value="{{ $pendaftar->nisn }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="number" class="form-control" name="nik" id="nik" value="{{ $pendaftar->nik }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Lahir</label>
                                        <input type="date" class="form-control" name="lahir" id="lahir" value="{{ $pendaftar->lahir }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" class="form-select">
                                            <option>Pilih</option>
                                            <option value="Islam" {{old('agama',$pendaftar->agama)=="Islam"? 'selected':''}}>Islam</option>
                                            <option value="Kristen" {{old('agama',$pendaftar->agama)=="Kristen"? 'selected':''}}>kristen</option>
                                            <option value="Budha" {{old('agama',$pendaftar->agama)=="Budha"? 'selected':''}}>Budha</option>
                                            <option value="Hindu" {{old('agama',$pendaftar->agama)=="Hindu"? 'selected':''}}>Hindu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10">{{ $pendaftar->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="number" class="form-control" name="no_telp" id="no_telp" value="{{ $pendaftar->no_telp }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ $pendaftar->email }}" readonly>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="foto_diri">Pas Foto</label>
                                        <input type="file" class="form-control" name="foto_diri" id="foto_diri" value="foto_diri">
                                        <a href="{{ asset('pas_foto/' . $pendaftar->foto_diri) }}" target="_blank" class="d-block">
                                            <img src="{{ asset('pas_foto/' . $pendaftar->foto_diri) }}" class="img-thumbnail img-fluid" style="height: 220px; object-fit: cover" alt="Foto Diri">
                                        </a>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="program_studi">Program Studi ke 1</label>
                                        <select name="program_studi" class="form-select">
                                            <option>Pilih</option>
                                            <option value="D4 Teknik Informatika" {{old('program_studi',$pendaftar->program_studi)=="D4 Teknik Informatika"? 'selected':''}}>D4 Teknik Informatika</option>
                                            <option value="D3 Teknik Informatika" {{old('program_studi',$pendaftar->program_studi)=="D3 Teknik Informatika"? 'selected':''}}>D3 Teknik Informatika</option>
                                            <option value="D4 Manajemen Bisnis" {{old('program_studi',$pendaftar->program_studi)=="D4 Manajemen Bisnis"? 'selected':''}}>D4 Manajemen Bisnis</option>
                                            <option value="D3 Manajemen Bisnis" {{old('program_studi',$pendaftar->program_studi)=="D3 Manajemen Bisnis"? 'selected':''}}>D3 Manajemen Bisnis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="program_studi2">Program Studi ke 2</label>
                                        <select name="program_studi2" class="form-select">
                                            <option>Pilih</option>
                                            <option value="D4 Teknik Informatika" {{old('program_studi',$pendaftar->program_studi2)=="D4 Teknik Informatika"? 'selected':''}}>D4 Teknik Informatika</option>
                                            <option value="D3 Teknik Informatika" {{old('program_studi',$pendaftar->program_studi2)=="D3 Teknik Informatika"? 'selected':''}}>D3 Teknik Informatika</option>
                                            <option value="D4 Manajemen Bisnis" {{old('program_studi',$pendaftar->program_studi2)=="D4 Manajemen Bisnis"? 'selected':''}}>D4 Manajemen Bisnis</option>
                                            <option value="D3 Manajemen Bisnis" {{old('program_studi',$pendaftar->program_studi2)=="D3 Manajemen Bisnis"? 'selected':''}}>D3 Manajemen Bisnis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="jalur_masuk">Jalur Masuk</label>
                                        <select name="jalur_masuk" class="form-select">
                                            <option>Pilih</option>
                                            <option value="Test" {{old('jalur_masuk',$pendaftar->jalur_masuk)=="Test"? 'selected':''}}>Test</option>
                                            <option value="Undangan" {{old('jalur_masuk',$pendaftar->jalur_masuk)=="Undangan"? 'selected':''}}>Undangan</option>
                                            <option value="Beasiswa" {{old('jalur_masuk',$pendaftar->jalur_masuk)=="Beasiswa"? 'selected':''}}>Beasiswa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">SUBMIT</button>
                            </div>
                        </form>
                    </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
