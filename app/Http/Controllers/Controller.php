<?php

namespace App\Http\Controllers;

use App\AlumnoModel;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio()
    {


        return view('welcome')->with('usuarios', $texto);
    }

    public function aniadirUsuario(Request $request)
    {
        // Cogemos el nombre y lo añadimos a la base de datos
        $nombre = $_POST['nombre'];
        $nuevoUsuario = new AlumnoModel;
        $nuevoUsuario->insert(['nombre' => $nombre, 'id_profesor' => rand(1, 3)]);
        return redirect('/'); //Esto lo hacemos para que no se nos quede en una pantalla en blanco
    }

}
