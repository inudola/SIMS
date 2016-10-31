<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableOrangTuaDanWali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrangTuaDanWali', function (Blueprint $table) {
            $table->increments('NISN');
            $table->string('noKtpAyah');
            $table->string('namaAyah');
            $table->string('tempatTanggalLahirAyah');
            $table->string('agamaAyah');
            $table->string('kewarganegaraanAyah');
            $table->string('pendidikanAyah');
            $table->string('pekerjaanAyah');
            $table->string('penghasilanPerbulanAyah');
            $table->string('alamatRumah/notlpnAyah');
            $table->string('masihHidupAtauMeninggalDuniaTahunAyah');
            $table->string('noKtpIbu');
            $table->string('namaIbu');
            $table->string('tempatTanggalLahirIbu');
            $table->string('agamaIbu');
            $table->string('kewarganegaraanIbu');
            $table->string('pendidikanIbu');
            $table->string('pekerjaanIbu');
            $table->string('penghasilanPerbulanIbu');
            $table->string('alamatRumah/notlpnIbu');
            $table->string('masihHidupAtauMeninggalDuniaTahunIbu');
            $table->string('noKtpWali');
            $table->string('namaWali');
            $table->string('tempatTanggalLahirWali');
            $table->string('agamaWali');
            $table->string('kewarganegaraanWali');
            $table->string('pendidikanWali');
            $table->string('pekerjaanWali');
            $table->string('penghasilanPerbulanWali');
            $table->string('alamatRumah/notlpnWali');
            $table->string('imgAyah');
            $table->string('imgIbu');
            $table->string('imgWali');
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
        Schema::dropIfExists('OrangTuaDanWali');
    }
}
