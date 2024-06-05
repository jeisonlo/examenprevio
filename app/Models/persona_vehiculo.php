<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona_vehiculo extends Model
{
    use HasFactory;
    public function persona (){
        return $this->belongsToMany('App\Models\Persona');
    }
   

}
