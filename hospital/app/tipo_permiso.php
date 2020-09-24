<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_permiso extends Model
{
    protected $table="tipo_permisos";
    public function permisos(){
        return $this->hasMany(Permiso::class);
    }
}
