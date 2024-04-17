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
                        <center>
                            <br><img class="logo-ulbi" src="https://enroll.ulbi.ac.id/mhs/../assets/images//ulbi_logo/logo_wide_ulbi.png" width="220px"></p><br>
                            <h3 class="box-title"><b>DASHBOARD</b><br>PENERIMAAN MAHASISWA BARU</h3>
                            <hr>
                            <h5>Welcome {{ Auth::user()->name }}</h5>
                        </center>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
