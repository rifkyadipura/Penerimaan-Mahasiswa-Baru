<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
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
        // dd($pendaftar);
        return view('pendaftar.biodata.index', compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftar.biodata.createBiodata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        // Validate the request data
        // $request->validate([
        //     'name'          => 'required|max:255',
        //     'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
        //     'nisn'          => 'required|max:16',
        //     'nik'           => 'required|max:16',
        //     'lahir'         => 'required',
        //     'agama'         => 'required|max:20',
        //     'alamat'        => 'required|max:255',
        //     'no_telp'       => 'required|max:32',
        //     'email'         => 'required|max:155',
        //     'program_studi' => 'required',
        //     'jalur_masuk'   => 'required|max:255',
        //     'foto_diri'     => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        // ], [
        //     "jenis_kelamin.required"=>"Jenis Kelamin Tidak Boleh Kosong",
        //     "nisn.required"=>"NISN Tidak Boleh Kosong"
        // ]);

        $nama_foto = "";
        $pendaftar = new Pendaftar;
        $pendaftar->user_id = auth()->user()->id;
        $pendaftar->name = $request->get('name');
        $pendaftar->jenis_kelamin = $request->get('jenis_kelamin');
        $pendaftar->nisn = $request->get('nisn');
        $pendaftar->nik = $request->get('nik');
        $pendaftar->lahir = $request->get('lahir');
        $pendaftar->agama = $request->get('agama');
        $pendaftar->alamat = $request->get('alamat');
        $pendaftar->no_telp = $request->get('no_telp');
        $pendaftar->email = $request->get('email');
        $pendaftar->program_studi = $request->get('program_studi');
        $pendaftar->program_studi2 = $request->get('program_studi2');
        $pendaftar->jalur_masuk = $request->get('jalur_masuk');
        $pendaftar->foto_diri = $request->get('foto_diri');
        $pendaftar->keterangan="Belum Dilihat";

        if ($request->hasFile('foto_diri')) {
            $file = $request->file('foto_diri');
            $path = public_path('/pas_foto');
            $nama_foto = $file->getClientOriginalName();
            $file->move($path, $nama_foto);
        }
        $pendaftar->foto_diri = $nama_foto;
        $pendaftar->save();
        return redirect()->route('biodata.index')->with('success', 'Berhasil Mengisi Biodata');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pendaftar_id)
    {
        $pendaftar = Pendaftar::where('pendaftar_id', $pendaftar_id)->first();

        return view('pendaftar.biodata.showBiodata', compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pendaftar_id)
    {
        $pendaftar = Pendaftar::where('pendaftar_id', $pendaftar_id)->first();

        return view("pendaftar.biodata.editBiodata", compact('pendaftar'));
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
        $nama_foto = "";
        $pendaftar = Pendaftar::where('pendaftar_id', $pendaftar_id)->first();
        $pendaftar->user_id = auth()->user()->id;
        $pendaftar->name = $request->get('name');
        $pendaftar->jenis_kelamin = $request->get('jenis_kelamin');
        $pendaftar->nisn = $request->get('nisn');
        $pendaftar->nik = $request->get('nik');
        $pendaftar->lahir = $request->get('lahir');
        $pendaftar->agama = $request->get('agama');
        $pendaftar->alamat = $request->get('alamat');
        $pendaftar->no_telp = $request->get('no_telp');
        $pendaftar->email = $request->get('email');
        $pendaftar->program_studi = $request->get('program_studi');
        $pendaftar->program_studi2 = $request->get('program_studi2');
        $pendaftar->jalur_masuk = $request->get('jalur_masuk');
        $pendaftar->keterangan="Belum Dilihat";
        $pendaftar->update();

        return redirect()->route('biodata.index')->with('success', 'Berhasil Update Biodata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($pendaftar_id)
    {
        $pendaftar = Pendaftar::find($pendaftar_id);

        $pendaftar->delete();
        return redirect()->route('biodata.index')->with('success', 'Berhasil Delete Biodata');
    }
}
