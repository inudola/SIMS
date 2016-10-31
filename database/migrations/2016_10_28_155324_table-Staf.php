<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableStaf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Staf', function (Blueprint $table) {
            $table->increments('NIK');
            $table->integer('id_Sekolah');
            $table->integer('id_Jabatan');
            $table->string('namaStaf');
            $table->string('alamat');
            $table->string('NUPTK');
            $table->string('jenisKelamin');
            $table->string('tempatLahir');
            $table->string('pendTerakhir');
            $table->string('namaIbuKandung');
            $table->string('ststusKepegawaian');
            $table->string('tahunMasuk');
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
        Schema::dropIfExists('Staf');
    }
}
