<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MantenimentController;
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

Route::controller(MantenimentController::class)->group(function () {
    Route::get('manteniment', 'index')->name('manteniment.index');
    Route::get('manteniment/crear', 'create')->name('manteniment.crear');
    Route::get('manteniment/editar', 'edit')->name('manteniment.editar');
    Route::get('manteniment/carga', 'massiveLoad')->name('manteniment.carga');
});
