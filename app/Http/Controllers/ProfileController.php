<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $pendaftar = Pendaftar::where('user_id', $user_id)->first();

        return view('pendaftar.profile.index', compact('pendaftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pendaftar_id)
    {
        $foto = Pendaftar::where('pendaftar_id', $pendaftar_id)->first();
        $nama_foto = "";
        $pendaftar = Pendaftar::where('pendaftar_id', $pendaftar_id)->first();
        $pendaftar->user_id = auth()->user()->id;
        $pendaftar->foto_diri = $foto->foto_diri;;

        if ($request->hasFile('foto_diri')) {
            $file = $request->file('foto_diri');
            $path = public_path('/pas_foto');
            $nama_foto = $file->getClientOriginalName();
            $file->move($path, $nama_foto);
        }
        $pendaftar->foto_diri = $nama_foto;
        $pendaftar->update();

        return redirect()->route('profile.index')->with('success', 'Berhasil Update Foto Profile');
    }
}
