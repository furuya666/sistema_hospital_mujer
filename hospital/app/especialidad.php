<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
    //
    protected $table="especialidads";
    public function personas(){
        return $this->hasMany(Persona::class);
    }
}
