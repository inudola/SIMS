<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sekolah', function (Blueprint $table) {
            $table->increments('id_Sekolah');
            $table->string('namaSekolah');
            $table->string('NPSN');
            $table->string('NSM');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('propinsi');
            $table->string('notpln');
            $table->string('fax');
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
        Schema::dropIfExists('Sekolah');
    }
}
