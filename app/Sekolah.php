<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
	protected $table = 'Sekolah';
    
    protected $fillable = [
		'id_Sekolah',
		'namaSekolah',
		'NPSN',
		'NSM',
		'alamat',
		'desa',
		'kecamatan',
		'kabupaten',
		'propinsi',
		'notpln',
		'fax',
	];
}
