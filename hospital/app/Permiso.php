<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
  protected $table="permisos";
 
  public function persona(){
      return $this->belongsTo(Persona::class);
  }
}
