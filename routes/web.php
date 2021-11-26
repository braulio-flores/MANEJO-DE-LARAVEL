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
Route::get('cursos', [CursosController::class,'index']); //SE METE DENTRO DE UN ARRAY Y COMO SEGUNDO PARAMETRO SE PASA EL METODO 

// Route::get('cursos/create', function () {
//     return "Bienvenido";
// });
Route::get('cursos/create', [CursosController::class,'create']);

// accediendo seria por http://localhost:1337/laravel-project/public/cursos/html
// SE LE VA A PASAR UNA VARIABLE ENTRE LOS {} Y POSTERIROR SE TIENE QUE RECIBIR COMO PARAMETRO EN LA FUNCION
Route::get('cursos/{curso}/{curso2}', [CursosController::class,'show']);
Route::get('cursos/{curso}/{curso2}/{curso3}', [CursosController::class,'showJSON']);