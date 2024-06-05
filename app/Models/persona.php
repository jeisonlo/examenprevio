<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    public function vehiculo (){
        return $this->belongsToMany('App\Models\Vehiculo');
    }
    public function accidente (){
        return $this->hasOne('App\Models\Accidente');
    }
}
