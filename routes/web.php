<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('halamanWelcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Menu Pendaftar
    Route::middleware(['role:0'])->group(function () {
        // Home Pendaftar
        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.pendaftar');

        // Profile Pendaftar
        Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
        Route::post('profile/update/{pendaftar_id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

        // Biodata Pendaftar
        Route::get('pendaftar/biodata', [App\Http\Controllers\BiodataController::class, 'index'])->name('biodata.index');
        Route::get('pendaftar/biodata/create', [App\Http\Controllers\BiodataController::class, 'create'])->name('biodata.create');
        Route::post('pendaftar/biodata/simpan', [App\Http\Controllers\BiodataController::class, 'simpan'])->name('biodata.simpan');
        Route::get('pendaftar/biodata/show/{pendaftar_id}', [App\Http\Controllers\BiodataController::class, 'show'])->name('biodata.show');
        Route::get('pendaftar/biodata/edit/{pendaftar_id}', [App\Http\Controllers\BiodataController::class, 'edit'])->name('biodata.edit');
        Route::post('pendaftar/biodata/update/{pendaftar_id}', [App\Http\Controllers\BiodataController::class, 'update'])->name('biodata.update');
        Route::get('pendaftar/biodata/delete/{pendaftar_id}', [App\Http\Controllers\BiodataController::class, 'delete'])->name('biodata.delete');
    });

    // Menu Pegawai
    Route::middleware(['role:1'])->group(function () {
        // Home Pendaftar
        Route::get('pegawai/home', [App\Http\Controllers\Pegawai\HomeController::class, '__invoke'])->name('home');

        // Verifikasi Pendaftar
        Route::get('pegawai/pendaftar', [App\Http\Controllers\pegawai\PendaftarController::class, 'index'])->name('pendaftar.index');
        Route::get('pegawai/verifikasi/{id}', [App\Http\Controllers\pegawai\PendaftarController::class,'verifikasi'])->name('pendaftar.verifikasi');
        Route::post('pegawai/updateverifikasi', [App\Http\Controllers\pegawai\PendaftarController::class, 'updateVerifikasi'])->name('pendaftar.updateVerifikasi');
    });

});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['role:1'])->prefix('pegawai')->as('pegawai.')->namespace('App\Http\Controllers\pegawai')->group(function () {
//         Route::get('/home', 'HomeController@__invoke')->name('home');
//         Route::get('/pendaftar', 'PendaftarController@index')->name('pendaftar');
//     });
