<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// VAMOS A HACER USO DEL CONTROLADOR Y SUSTITUIMOS EL CODIGO DE ARRIBA POR EL DE ABAJO, USANDO HOME CONTROLLER
// EN LUGAR DE TODA LA FUNCION LLAMAMOS A LOS METODOS DEL CONTROLADOR PARA TENER UN CODIGO MAS LIMPIO
Route::get('/', HomeController::class);


// accediendo seria por http://localhost:1337/laravel-project/public/cursos
Route::get('cursos', [CursosController::class,'index'])->name('cursos.index'); //SE METE DENTRO DE UN ARRAY Y COMO SEGUNDO PARAMETRO SE PASA EL METODO 

// Route::get('cursos/create', function () {
//     return "Bienvenido";
// });
Route::get('cursos/create', [CursosController::class,'create'])->name('cursos.create');
Route::post('cursos', [CursosController::class,'store'])->name('cursos.store');
// !EN LA PARTE DE ARRIBA USO EL METODO POST PORQUE VIENE DE UN FORM Y LO VOY A UTILIZAR PARA INGRESAR DATOS A LA BD


// ruta para llamar al form con los campos llenos de n rura
Route::get('cursos/{id}/edit', [CursosController::class,'editThis'])->name('cursos.edit');
// ruta para llamar actualizar los datos del form de arruba, misma ruta, diferente metodo
Route::put('cursos/{id}/edit', [CursosController::class,'modifyTthis'])->name('cursos.modify');
// CUANDO SE ACTUALIZAR SE RECOMIENDA PUT
Route::delete('cursos/{curso}', [CursosController::class,'destroy'])->name('cursos.destroy');
// CUANDO SE ACTUALIZAR SE RECOMIENDA PUT

// accediendo seria por http://localhost:1337/laravel-project/public/cursos/html
// SE LE VA A PASAR UNA VARIABLE ENTRE LOS {} Y POSTERIROR SE TIENE QUE RECIBIR COMO PARAMETRO EN LA FUNCION
Route::get('cursos/{curso}/{curso2}', [CursosController::class,'show'])->name('cursos.show');
Route::get('cursos/{curso}/{curso2}/{curso3}', [CursosController::class,'showJSON'])->name('cursos.showJSON');

Route::get('cursos/{id}', [CursosController::class,'showComplete'])->name('cursos.showComplete');

