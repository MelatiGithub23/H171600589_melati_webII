<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
	protected $table='artikel';
    
    protected $fillable=[
          'judul','users_id','kategori_artikel_id'
    ];
    //
}
