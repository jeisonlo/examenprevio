<?php

use App\Http\Controllers\AccidenteController;
use Illuminate\Support\Facades\Route;

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


//primero creo la ruta principal que se le muestra al usuario create 
Route::get('accidente/create',[AccidenteController::class,'create']);

//segundo creo la ruta store que me guardo los datos que quiero enviar 
Route::post('accidente/store', [AccidenteController::class,'store'])->name('accidente.store');

//tercero creo la ruta listar que me muestra todos los registros 
Route::get('accidente/listar',[AccidenteController::class,'index'])->name('accidente.index');

//cuarto se crea la ruta de eliminar
Route::delete('accidente/{accidente}',[AccidenteController::class,'destroy'])->name('accidente.destroy');

//cinto se crea la ruta de editar 
Route::get('accidente/{accidente}/editar',[AccidenteController::class,'edit'])->name('accidente.edit');

//sexto se crea la ruta de updta 
Route::put('accidente/{accidente}',[AccidenteController::class,'update'])->name('accidente.update');

//septimo se crea la ruta show 
Route::get('accidente/{id}',[AccidenteController::class,'show'])->name('accidente.show');
