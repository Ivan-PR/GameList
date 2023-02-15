<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);
//Route::get('manteniment', [MantenimentController::class, 'index']);

Route::controller(MantenimentController::class)->group(function () {
    Route::get('manteniment', 'index');
    Route::get('manteniment/crear', 'create');
    Route::get('manteniment/editar', 'edit');
    Route::get('manteniment/eliminar', 'delete');
});

// Route::controller(MantenimentController::class)->group(function () {
//     Route::get('manteniment/crear', 'create');
//     Route::get('manteniment/editar', 'edit');
//     Route::get('manteniment/eliminar', 'delete');
// });

