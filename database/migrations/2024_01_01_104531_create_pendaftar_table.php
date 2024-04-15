<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->bigIncrements('pendaftar_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 255);
            $table->string('jenis_kelamin', 32);
            $table->string('nisn', 16);
            $table->string('nik', 16);
            $table->string('lahir', 32);
            $table->string('agama', 20);
            $table->string('alamat', 255);
            $table->string('no_telp', 32);
            $table->string('email', 155);
            $table->string('program_studi', 64);
            $table->string('program_studi2', 64);
            $table->string('jalur_masuk', 32);
            $table->string('foto_diri', 255);
            $table->string('keterangan', 50);
            $table->tinyInteger('status')->default(1);

            // Add foreign key constraint
            $table->foreign('user_id')->references('id')->on('users');

            // Add timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
