<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;


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
    return view('producto.index');
});

//Route::get('/empleado/create',[EmpleadoController::class,'create'] );
// Route::resource('empleado',EmpleadoController::class);

Route::resource('user',UserController::class);
Route::resource('producto',ProductoController::class);

