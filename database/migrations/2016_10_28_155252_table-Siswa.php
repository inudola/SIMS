<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Siswa', function (Blueprint $table) {
            $table->increments('NISN');
            $table->integer('NIS');
            $table->integer('id_Sekolah');
            $table->string('namaLengkap');
            $table->string('namaPanggilan');
            $table->string('alamat');
            $table->string('jenisKelamin');
            $table->string('tempatTanggalLahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->integer('anakKe');
            $table->string('jumlahSaudaraKandung');
            $table->string('jumlahSaudaraAngkat');
            $table->string('anakYatimAtauPiatu');
            $table->string('tinggalBersama');
            $table->string('golonganDarah');
            $table->string('penyakitYangPernahDiderita');
            $table->string('kelainanJasmani');
            $table->string('tinggiDanBeratBadan');
            $table->string('noTlpn');
            $table->string('img');
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
        Schema::dropIfExists('Siswa');
    }
}
