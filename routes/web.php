<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CargoDosController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('prueba', function(){
    $suma = 1 + 2; 
    return "Hola a todos" . $suma;
});

Route::get('prueba2/{id?}', function($id = 123){
    return "El parámetro pasado es: " . $id;
});

Route::get('prueba3/{id}/{nombre}', function($id, $nombre){
    return "Los parámetros pasados son: " . $id . "-" . $nombre;
});

Route::get('mi-ejemplo/{codigo?}', function($codigo = null){
    return view('ejemplo', compact('codigo'));
});

Route::get('xyz', function(){
    return "página de clientes";
})->name('clientes');


// Route::get('emp', function(){
//     return view('empleados');
// })->name('empleados');

Route::get('emp', function(){
    return view('empleados');
})->name('empleados');


// Route::get('mostrar1',[CargoController::class, 'mostrarDatos1']);

// Route::get('mostrar2', [CargoController::class, 'mostrarDatos2']);

// Route::get('mostrar3/{id}', [CargoController::class, 'mostrarDatos3']);

// Route::get('mostrar4', CargoDosController::class );