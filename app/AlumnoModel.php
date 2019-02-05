<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
    protected $table = "alumnos";
    protected $fillable = [
        'nombre', 'id_profesor'
    ];

}