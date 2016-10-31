<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoby extends Model
{
   	protected $table = 'Hobi';
    
    protected $fillable = [
		'id_Hobi',
		'nama_hobi',
    ];
}
