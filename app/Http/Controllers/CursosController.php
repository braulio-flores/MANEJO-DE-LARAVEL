<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    // public function __invoke(){} //METODO POR DEFECTO QUE SE LLAMARIA SI SOLO TUVIERAMOS UNA SOLA FUNCION __invoke
    public function index(){ //por definicion al main de la ruta se le llama index
        return view('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($curso,$curso2){
        return view('cursos.show',['curso'=>$curso,'curso2'=>$curso2]);
    }
    public function showJSON($curso,$curso2,$curso3){
        $array = ['curso 1'=>$curso,'curso 2'=>$curso2,'curso 3'=>$curso3];
        return view('cursos.showjson',['array'=>$array]);
    }
}
