<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTuaDanWali extends Model
{
	protected $table = 'OrangTuaDanWali';

    protected $fillable = [
		'NISN',
		'noKtpAyah',
		'namaAyah',
		'tempatTanggalLahirAyah',
		'agamaAyah',
		'kewarganegaraanAyah',
		'pendidikanAyah',
		'pekerjaanAyah',
		'penghasilanPerbulanAyah',
		'alamatRumah',
		'masihHidupAtauMeninggalDuniaTahunAyah',
		'noKtpIbu',
		'namaIbu',
		'tempatTanggalLahirIbu',
		'agamaIbu',
		'kewarganegaraanIbu',
		'pendidikanIbu',
		'pekerjaanIbu',
		'penghasilanPerbulanIbu',
		'alamatRumah/notlpnIbu',
		'masihHidupAtauMeninggalDuniaTahunIbu',
		'noKtpWali',
		'namaWali',
		'tempatTanggalLahirWali',
		'agamaWali',
		'kewarganegaraanWali',
		'pendidikanWali',
		'pekerjaanWali',
		'penghasilanPerbulanWali',
		'alamatRumah/notlpnWali',
		'imgAyah',
		'imgIbu',
		'imgWali',
	];



}
