<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\AlumnoModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function inicio(){
        $texto = "sdfhuivhfdsulivbhufdshviñofdshvñisdfjiovhsdfiñohviñofsn";
        
        return view('welcome')->with('texto',$texto);
    }

    public function aniadirUsuario(){
    $nombre = $_POST['nombre'];
    $nuevoUsuario = new AlumnoModel;
    $nuevoUsuario->insert(['nombre'=>$nombre,'id_profesor'=>rand(1,3)]);
        
    }

}
