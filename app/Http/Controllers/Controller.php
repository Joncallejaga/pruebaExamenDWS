<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\AlumnoModel;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio(){
        $texto = "";
        
        return view('welcome')->with('texto',$texto);
    }

    public function aniadirUsuario(Request $request){
        $nombre = $request;
        $nuevoUsuario = new AlumnoModel;
        $nuevoUsuario->insert(['nombre'=>$nombre,'id_profesor'=>rand(1,3)]);
    }

}
