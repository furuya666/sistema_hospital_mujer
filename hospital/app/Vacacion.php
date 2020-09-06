<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacacion extends Model
{
    //
  
    protected $table="vacacions";
    public function persona(){
    return $this->belongsTo(Persona::class);
  }
}
