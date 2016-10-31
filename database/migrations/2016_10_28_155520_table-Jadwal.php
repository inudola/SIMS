<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jadwal', function (Blueprint $table) {
            $table->increments('id_Sekolah');
            $table->integer('id_Kelas');
            $table->integer('id_MataPelajaran');
            $table->integer('id_Staf');
            $table->string('hari');
            $table->time('jam');
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
        Schema::dropIfExists('Jadwal');
    }
}
