<?php

use App\Http\Controllers\PrendaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('prenda', [PrendaController::class, 'index']);
//Route::get('ingresa', [PrendaController::class, 'create']);
//Route::post('ingresa', [PrendaController::class, 'store']);
//Route::get('/prenda-individual/{id?}', [PrendaController::class, 'show']);

Route::resource('prenda', PrendaController::class);
//Route::resource('prenda', PrendaController::class)->except(['destroy', 'index']); Crea una ruta para cada metodo y el except las evita  