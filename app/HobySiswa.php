<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HobySiswa extends Model
{
    protected $table = 'HobiSiswa';

    protected $fillable = [
		'NISN',
		'id_Hobi',
    ];
}
