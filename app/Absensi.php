<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{

	protected $table = 'Hobi';
    
    protected $fillable = [
		'id_Sekolah',
		'NISN',
		'id_Jadwal',
		'status',
    ];

}
