<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/equipo', function () {
    return view('equipo');
});


Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/productos/create', [ProductosController::class, 'create']);
Route::get('/productos/{id}', [ProductosController::class, 'show']);

/* Route::post('/productos', function(Request $request) {
    return redirect('productos');
});

Route::get('productos/{id}', function() {

});

Route::get('productos/{id}/edit', function() {

});

Route::post('productos/{id}', function(Request $request) {
    return redirect('productos');
}); */

Route::get('/services', function () {
    return view('services');
});

Route::get('/testimonios', function () {
    return view('testimonios');
});

Route::get('/productos-detalles', function () {
    return view('productos-detalles');
});