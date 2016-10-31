<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
 	protected $table = 'Jabatan';
    
    protected $fillable = [
	     'id_Jabatan',
    	 'namaJabatan',
     ];
}

