<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kelas', function (Blueprint $table) {
            $table->increments('id_Kelas');
            $table->integer('id_Sekolah');
            $table->integer('id_Staf');
            $table->string('namaKelas');
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
        Schema::dropIfExists('Kelas');
    }
}
