<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;
use App\Http\Controllers\Ejemplo2Controller;
use App\Http\Controllers\Ejemplo3Controller;
use App\Http\Controllers\PaginasController;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return "Página principal.";
});

Route::get('/Nosotros', function () {
    return "Esta página muestra informacion sobre nosotros.";
});

Route::get('/Contacto', function () {
    return "Nuestros contactos.";
});
*/

/* PASAR PARAMETROS A LAS RUTAS con expresiones regulares */
/*
Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return "Este es el POST No: ". $id. " Creado por: ". $nombre;

})->where('nombre','[a-zA-Z]+');
*/

/* CREACIÓN DE LA RUTA A NUESTRO CONTROLADOR MANUAL */
/*
Route::get('/Inicio1', [EjemploController::class, 'inicio']);

Route::get('/Inicio2', [Ejemplo2Controller::class, 'inicio2']);
*/

/* PASAR PARAMETROS A LAS RUTAS */
/*
Route::get('/Inicio3/{id}', [Ejemplo3Controller::class, 'index']);
*/

Route::get('/', [PaginasController::class, 'inicio']);
Route::get('/inicio', [PaginasController::class, 'inicio2']);
Route::get('/quienesSomos', [PaginasController::class, 'quieneSomos']);
Route::get('/servicios', [PaginasController::class, 'servicios']);
Route::get('/contacto', [PaginasController::class, 'contacto']);
