<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table='Pendaftar';
    protected $primaryKey='pendaftar_id';
    public const CREATED_AT="create_date";
    public const UPDATED_AT="update_date";
    protected $guarded = ['pendaftar_id'];
    // protected $fillable = ["nama", "nik", "email", "password", "keterangan", "create_date", "update_date"];


    public static function getListPendaftar(){
        $sql = "SELECT * FROM pendaftar";
        $data = DB::connection()->select($sql);
        return $data;
    }

    // public static function getIDListPendaftar($id){
    //     $sql = "SELECT * FROM pendaftar WHERE id_pendaftar = '$id'";
    //     $data = DB::connection()->select($sql);
    //     return $data;
    // }
    // public static function nambahAkunPendaftar($nama, $email, $password){
    //     $sql = "INSERT INTO `pendaftar`
    //             (`id_pendaftar`, `nama`, `nik`, `email`, `password`, `no_telp`, `jenis_kelamin`, `lahir`, `program_studi1`, `program_studi2`, `jalur_masuk`, `keterangan`, `create_date`, `update_date`)
    //             VALUES
    //             (NULL, '$nama', '', '$email', '$password', '', '', '', '', '', '', '', '', '');";
    //     $data = DB::connection()->select($sql);
    //     return $data;
    // }
}
