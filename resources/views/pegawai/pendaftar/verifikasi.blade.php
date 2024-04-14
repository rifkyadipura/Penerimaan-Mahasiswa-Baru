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
                <!-- /.card-body -->
                <div class="card-body">
                    <h3 class="box-title"><b>Verifikasi Pendaftar</b><br></h3>
                    <hr>
                    <div class="form-group">
                        <a href="{{ route('pendaftar.index') }}"  class="btn btn-sm btn-info"><span class="fa fa-close"></span> Kembali</a>
                    </div>
                    <form action="{{ route('pendaftar.updateVerifikasi') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->pendaftar_id }}">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="keterangan">Jenis Kelamin *</label>
                                    <select name="jenis_kelamin" class="form-select" disabled>
                                        <option>Pilih</option>
                                        <option value="Laki-laki" {{old('jenis_kelamin',$data->jenis_kelamin)=="Laki-laki"? 'selected':''}}>Laki-laki</option>
                                        <option value="Perempuan" {{old('jenis_kelamin',$data->jenis_kelamin)=="Perempuan"? 'selected':''}}>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="number" class="form-control" name="nisn" id="nisn" value="{{ $data->nisn }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="number" class="form-control" name="nik" id="nik" value="{{ $data->nik }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Lahir</label>
                                    <input type="date" class="form-control" name="lahir" id="lahir" value="{{ $data->lahir }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select name="agama" class="form-select" disabled>
                                        <option>Pilih</option>
                                        <option value="Islam" {{old('agama',$data->agama)=="Islam"? 'selected':''}}>Islam</option>
                                        <option value="Kristen" {{old('agama',$data->agama)=="Kristen"? 'selected':''}}>kristen</option>
                                        <option value="Budha" {{old('agama',$data->agama)=="Budha"? 'selected':''}}>Budha</option>
                                        <option value="Hindu" {{old('agama',$data->agama)=="Hindu"? 'selected':''}}>Hindu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="number" class="form-control" name="no_telp" id="no_telp" value="{{ $data->no_telp }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10" readonly>{{ $data->alamat }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="program_studi">Program Studi</label>
                                    <select name="program_studi" class="form-select" disabled>
                                        <option>Pilih</option>
                                        <option value="D4 Teknik Informatika" {{old('program_studi',$data->program_studi)=="D4 Teknik Informatika"? 'selected':''}}>D4 Teknik Informatika</option>
                                        <option value="D3 Teknik Informatika" {{old('program_studi',$data->program_studi)=="D3 Teknik Informatika"? 'selected':''}}>D3 Teknik Informatika</option>
                                        <option value="D4 Manajemen Bisnis" {{old('program_studi',$data->program_studi)=="D4 Manajemen Bisnis"? 'selected':''}}>D4 Manajemen Bisnis</option>
                                        <option value="D3 Manajemen Bisnis" {{old('program_studi',$data->program_studi)=="D3 Manajemen Bisnis"? 'selected':''}}>D3 Manajemen Bisnis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="jalur_masuk">Jalur Masuk</label>
                                    <select name="jalur_masuk" class="form-select" disabled>
                                        <option>Pilih</option>
                                        <option value="Test" {{old('jalur_masuk',$data->jalur_masuk)=="Test"? 'selected':''}}>Test</option>
                                        <option value="Undangan" {{old('jalur_masuk',$data->jalur_masuk)=="Undangan"? 'selected':''}}>Undangan</option>
                                        <option value="Beasiswa" {{old('jalur_masuk',$data->jalur_masuk)=="Beasiswa"? 'selected':''}}>Beasiswa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="foto_diri">Pas Foto</label>
                                    <a href="{{ asset('pas_foto/' . $data->foto_diri) }}" target="_blank" class="d-block">
                                        <img src="{{ asset('pas_foto/' . $data->foto_diri) }}" class="img-thumbnail img-fluid" style="height: 220px; object-fit: cover" alt="Foto Diri">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan *</label>
                                    <select name="keterangan" class="form-select">
                                        <option>Pilih</option>
                                        <option {{old('keterangan',$data->keterangan)=="Diterima"? 'selected':''}}  value="Diterima">Diterima</option>
                                        <option {{old('keterangan',$data->keterangan)=="Ditolak"? 'selected':''}} value="Ditolak">Ditolak</option>
                                     </select>
                                </div>
                            </div>
                            {{-- <textarea name="keterangan" class="form-control" placeholder="Keterangan">{{ $data->keterangan }}</textarea> --}}
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">SUBMIT</button>
                        </div>
                    </form>
                </div><!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
