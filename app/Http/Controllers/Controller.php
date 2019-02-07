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
        return view('welcome');
    }

    public function actualizar()
    {
        $usuarios = AlumnoModel::all();
        return view('actualizar')->with('usuarios', $usuarios);

    }

    public function aniadirUsuario(Request $request)
    {
        // Cogemos el nombre y lo añadimos a la base de datos
        $nombre = $_POST['nombre'];
        $nuevoUsuario = new AlumnoModel;
        $nuevoUsuario->insert(['nombre' => $nombre, 'id_profesor' => rand(1, 3)]);
        return redirect('/'); //Esto lo hacemos para que no se nos quede en una pantalla en blanco
    }

    public function actualizarUsuario(Request $request)
    {
        $nombre = $_POST['nombre'];
        $id_usuario = $_POST['id_usuario'];
        $actualizarUsuario = AlumnoModel::where('id', $id_usuario);
        if (isset($_POST['actualizar'])) {
            $actualizarUsuario->update(['nombre' => $nombre]);

        } elseif (isset($_POST['borrar'])) {
            $actualizarUsuario->delete();
        }

        return redirect('/actualizar'); //Esto lo hacemos para que no se nos quede en una pantalla en blanco
    }
}
