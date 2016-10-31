<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMataPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MataPelajaran', function (Blueprint $table) {
            $table->increments('id_MataPelajaran');
            $table->integer('id_Sekolah');
            $table->string('namaMataPelajaran');
            $table->string('tingkat');
            $table->string('kelas');
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
        Schema::dropIfExists('MataPelajaran');
    }
}
