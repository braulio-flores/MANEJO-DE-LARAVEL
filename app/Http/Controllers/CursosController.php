<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursos;
use App\Models\Student;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    // public function __invoke(){} //METODO POR DEFECTO QUE SE LLAMARIA SI SOLO TUVIERAMOS UNA SOLA FUNCION __invoke
    public function index(){ //por definicion al main de la ruta se le llama index
        // ?$students = Student::all(); ASI SE DEPLEGARIA TODO EN UNA PAGINA PERO PODEMOS PAGINAR COMO A CONTINUACION
        $students = Student::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('students'));
    }
    
    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCursos $reques){
        // return view('cursos.create');
        // SE PUEDE HACER CON REQUEST O CON POST
        // $reques->validate([
        //     'name'=> 'required',
        //     'description' => 'required',
        //     'categ' => 'required'
        // ]);

        // !ESTA ES LA OPCION CONVENCIONAL CREAR UN OBJETO ASIGNAR SUS CARACTERISTICAS Y AL FINAL GUARDARLO CON SAVE
        // *$student = new Student();
        // *$student->nombre = $_POST["name"];
        // *$student->description = $reques->description;
        // *$student->categoria = $reques->categ;
        // *$student->save();
        // !PERO EN ASIGNACION MASIVA SE PUEDE USAR EL METODO CREATE DEL MODELO Y PASARLE UN ARRAY CON LAS CARACTERISTICAS
        // *$student = Student::create([
        //  *   'nombre' => $reques->name,
        //   *  'description' => $reques->description,
        //    * 'categoria' => $reques->categ
        // *]);
        // !PERO PARA SIUMPLIFICAR AUN MAS LA ASIGNACION MASIVA LO QUE SE PUEDE HACER ES PASAR DIRECTAMENTE EL 
        // !REQUES PERO CON SU METODO ALL() PARA ASI ESTAR PASANDO UN ARRAY
        // return $reques;
        
        $student = Student::create($reques->all()); //PARA QUE ESTO FUNCIONE LOS NAMES DE LOS INPUTS SE DEBEN DE LLAMAR IGUAL QUE 
        // LAS COLUMNAS DE LA TABLA DE LA BD

        // return $reques;

        return redirect()->route('cursos.showComplete',$student->id);
        // return $reques;
    }

    public function show($curso,$curso2){
        return view('cursos.show',['curso'=>$curso,'curso2'=>$curso2]);
        // COMO SEGUNDO PARAMETRO SIEMPRE SE LE DEBE DE PASAR UN ARRAY CON EL NOMBRE DE LA VARIABLE QUE TENDRA EN LA VISTA
        // Y EL VALOR QUE VA A TENER
        // CON compact lo que hace es devolvernos un array de la siguiente manera
        // POR EJEMPLO 
        // !compact('curso'); ['curso'=>$curso] 
        // EN LUGAR DE HACER TODO MANUAL
    }
    public function showJSON($curso,$curso2,$curso3){
        $array = ['curso 1'=>$curso,'curso 2'=>$curso2,'curso 3'=>$curso3];
        // return view('cursos.showjson',['array'=>$array]);
        return view('cursos.showjson',compact('array'));
        // !compact('curso'); ['curso'=>$curso] 
        // EN LUGAR DE HACER TODO MANUAL
    }
    public function showComplete($id){

        $curso = Student::find($id);
        // return $curso;
        return view('cursos.show',compact('curso'));
        // COMO SEGUNDO PARAMETRO SIEMPRE SE LE DEBE DE PASAR UN ARRAY CON EL NOMBRE DE LA VARIABLE QUE TENDRA EN LA VISTA
        // Y EL VALOR QUE VA A TENER
        // CON compact lo que hace es devolvernos un array de la siguiente manera
        // POR EJEMPLO 
        // !compact('curso'); ['curso'=>$curso] 
        // EN LUGAR DE HACER TODO MANUAL
    }
    public function editThis(Student $id)
    {
        // EN LA RUTA RECIBO UN ID, PERO COMO RECIBO UN OBJETO DE TIPO STUDENT POR ID LO BUSCA AUTOMATICAMENTE
        // return $id; LAS VARIABLES SE DEBEN DE LLAMAR IGUAL TANTO EN LA RUTA COMO AQUI PARA SABER CUAL ES CUAL
        return view('cursos.edit', compact('id'));
    }
    public function modifyTthis(Student $id,Request $reques)
    {
        $reques->validate([
            'name'=> 'required',
            'description' => 'required',
            'categ' => 'required'
        ]);

        $curso = Student::find($id);
        $curso->nombre = $_POST["name"];
        $curso->description = $reques->description;
        $curso->categoria = $reques->categ;
        $curso->save();
        // $id->update($reques->all);//!esta es la opcion corta de asignacion masiva, para ello deberiamos de recibir
        //!un objeto del modelo para que se pueda usar el metodo update

        return redirect()->route('cursos.showComplete',$curso->id);
    }
    public function destroy(Student $curso)
    {
        $curso->delete();
        // return "curso borrado exitosamente, solo mensaje de test";
        return ($this->index());
    }
}
