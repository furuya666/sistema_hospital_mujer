<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class falta extends Model
{
    //
    protected $table="faltas";
   
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
