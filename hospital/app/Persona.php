<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
   
    protected $table="personas";
    public function permisos(){
        return $this->hasMany(Permiso::class);
    }
    public function vacacions(){
        return $this->hasMany(Vacacion::class);
    }
    public function files(){
        return $this->hasOne(File::class);
    }
    public function faltas(){
        return $this->hasMany(falta::class);
    }
    public function especialidad(){
        return $this->belongsTo(especialidad::class);
      }
    
}
