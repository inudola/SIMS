<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	protected $table = 'Siswa';
    
    protected $fillable = [
		'NISN',
		'NIS',
		'id_Sekolah',
		'namaLengkap',
		'namaPanggilan',
		'alamat',
		'jenisKelamin',
		'tempatTanggalLahir',
		'agama',
		'kewarganegaraan',
		'anakKe',
		'jumlahSaudaraKandung',
		'jumlahSaudaraAngkat',
		'anakYatimAtauPiatu',
		'tinggalBersama',
		'golonganDarah',
		'penyakitYangPernahDiderita',
		'kelainanJasmani',
		'tinggiDanBeratBadan',
		'noTlpn',
		'img',
    ];
}
