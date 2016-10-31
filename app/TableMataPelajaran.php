<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableMataPelajaran extends Model
{
	protected $table = 'Staf';
    
    protected $fillable = [
		'id_MataPelajaran',
		'id_Sekolah',
		'namaMataPelajaran',
		'tingkat',
		'kelas',
    ];
}
