<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
	protected $table = 'Kelas';
    
    protected $fillable = [
		'id_Kelas',
		'id_Sekolah',
		'id_Staf',
		'namaKelas',
    ];

}
