<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $pegawai = User::where('id', $user->id)
        ->where('role', 0)
        ->first();

        return view('pegawai.home', compact('pegawai'));
    }
}
// namespace App\Http\Controllers\Pegawai;

// use App\Http\Controllers\Controller;

// class HomeController extends Controller
// {
//     public function __invoke()
//     {

//     }
// }
