<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
	protected $table = 'Jadwal';
    
    protected $fillable = [
		'id_Sekolah',
		'id_Kelas',
		'id_MataPelajaran',
		'id_Staf',
		'hari',
		'jam',
    ];

    

}
