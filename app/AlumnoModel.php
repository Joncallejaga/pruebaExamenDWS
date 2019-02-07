<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
    protected $table = "alumnos";
    protected $fillable = [
        'id_usuario', 'id_profesor'
    ];

}