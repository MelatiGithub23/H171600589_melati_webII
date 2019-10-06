<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_galeri extends Model
{
	protected $table='kategori_galeri';
    
    protected $fillable=[
          'id','nama','users_id'
      ];
    //
}
