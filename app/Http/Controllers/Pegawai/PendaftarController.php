<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\User;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftar = Pendaftar::getListPendaftar();

        return view("pegawai.pendaftar.index", compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifikasi($pendaftar_id)
    {
        $data = Pendaftar::findOrFail($pendaftar_id);

        $keterangan = array("Diterima", "Ditolak");
        return view('pegawai.pendaftar.verifikasi', compact("data", "keterangan"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateVerifikasi(Request $request)
    {
        $pendaftar = Pendaftar::find($request->id);
        $pendaftar->keterangan=$request->get("keterangan");
        $pendaftar->UPDATED_AT=now();
        $pendaftar->update();
        // dd($pendaftar);
        // $pendaftar->update([
        //     "keterangan"=>$request->get("keterangan")
        // ]);
        return redirect()->route('pendaftar.index')->with('success', 'Berhasil Verifikasi Pendaftar');
        // return redirect()
        // ->route('pendaftar.index')
        // ->with('message','Verifikasi Mahasiswa Berhasil');
        // return view('pendaftar.index', compact('pendaftar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
