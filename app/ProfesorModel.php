<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfesorModel extends Model
{
    protected $table = "profesores";
    protected $fillable = [
        'id_usuario', 'departamento'
    ];

}
