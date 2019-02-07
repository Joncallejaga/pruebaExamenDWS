<?php

namespace App\Http\Controllers;

use App\AlumnoModel;
use App\ProfesorModel;
use App\User;
use Hash;
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
        $usuarios = User::all();
        $alumnos = AlumnoModel::all();
        $profesores = ProfesorModel::all();
        $todos_usuarios = ['alumnos'=>$alumnos , 'profesores'=>$profesores, 'usuarios'=>$usuarios];
        return view('actualizar')->with('todos_usuarios', $todos_usuarios);


    }
    public function borrar()
    {
        $alumnos = AlumnoModel::all();
        $usuarios = User::all();

        $usuario_alumno = ['alumnos'=>$alumnos , 'usuarios'=>$usuarios];
        return view('borrar')->with('usuario_alumno', $usuario_alumno);

    }

    public function aniadirUsuario(Request $request)
    {
        // Cogemos el nombre y lo añadimos a la base de datos
        $nombre = $_POST['nombre'];
        $nuevoUsuario = new User;
        $nuevoAlumno = new AlumnoModel;
        $nuevoUsuario->insert(['username' => $nombre,'password'=>Hash::make('123')]);
        $nuevoAlumno->insert(['id_usuario'=>User::max('id'), 'id_profesor' => rand(1, 3)]);

        
        return redirect('/'); //Esto lo hacemos para que no se nos quede en una pantalla en blanco
    }

    
    public function borrarUsuario(Request $request)
    {
        $nombre = $_POST['nombre'];
        $id_usuario = $_POST['id_usuario'];
        $borrarUsuario = User::where('id', $id_usuario);
        if (isset($_POST['borrar'])) {
            $borrarUsuario->delete();

        }

        return redirect('/borrar'); //Esto lo hacemos para que no se nos quede en una pantalla en blanco
    }

    public function actualizarAlumno(Request $request)
    {
        $nombre = $_POST['nombre']; //Tabla User
        $id_alumno = $_POST['id_alumno']; //Tabla alumno
        $id_profesor = $_POST['id_profesor']; //Tabla profe
        $actualizarAlumno = AlumnoModel::where('id', $id_alumno)->first();
        $actualizarUsuario = User::where('id', $actualizarAlumno['id_usuario'])->first();
        if (isset($_POST['actualizar'])) {
            $actualizarUsuario->update(['username' => $nombre]);
            $actualizarAlumno->update(['id_profesor' => $id_profesor]);

        }

        return redirect('/actualizar'); //Esto lo hacemos para que no se nos quede en una pantalla en blanco
    }
}
