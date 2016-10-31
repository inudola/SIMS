<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
 
 	protected $table = 'Staf';
    
    protected $fillable = [
		'NIK',
		'id_Sekolah',
		'id_Jabatan',
		'namaStaf',
		'alamat',
		'NUPTK',
		'jenisKelamin',
		'tempatLahir',
		'pendTerakhir',
		'namaIbuKandung',
		'ststusKepegawaian',
		'tahunMasuk',
    ];
}
