<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accidente extends Model
{
    use HasFactory;
    public function persona (){
        return $this->belongsTo('App\Models\Persona');
    }
}
