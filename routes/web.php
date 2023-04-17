<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MantenimentGameController;
use App\Http\Controllers\UserController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::controller(MantenimentGameController::class)->group(function () {
    Route::get('mantenimiento/juegos', 'index')->name('mantenimentGame.index');
    Route::get('mantenimiento/juegos/crear','crear')->name('mantenimentGame.crear');
    Route::post('mantenimiento/juegos/almacenar', 'store')->name('mantenimentGame.store');
    Route::get('mantenimiento/juegos/editar/{game}', 'edit')->name('mantenimentGame.editar');
    Route::put('mantenimiento/juegos/actualizar/{game}', 'update')->name('mantenimentGame.update');
    Route::delete('mantenimiento/juegos/eliminar/{game}', 'delete')->name('mantenimentGame.eliminar');
    Route::get('mantenimiento/juegos/carga', 'massiveLoad')->name('mantenimentGame.carga');
});

Route::controller(MantenimentLocalitzacionsController::class)->group(function () {
    Route::get('mantenimiento/localizaciones', 'index')->name('mantenimentLocalitzacions.index');
    Route::get('mantenimiento/localizaciones/crear','crear')->name('mantenimentLocalitzacions.crear');
    Route::post('mantenimiento/localizaciones/almacenar', 'store')->name('mantenimentLocalitzacions.store');
    Route::get('mantenimiento/localizaciones/editar/{location}', 'edit')->name('mantenimentLocalitzacions.editar');
    Route::put('mantenimiento/localizaciones/actualizar/{location}', 'update')->name('mantenimentLocalitzacions.update');
    Route::delete('mantenimiento/localizaciones/eliminar/{location}', 'delete')->name('mantenimentLocalitzacions.eliminar');
});

Route::controller(UserController::class)->group(function () {
    Route::view('users', 'users.index')->middleware('auth')->name('users.index');
    Route::get('users/crear', 'create')->name('users.create');
    Route::get('users/editar/{id}', 'edit')->name('users.editar');
    Route::view('users/login', 'users.login')->name('users.login');
    Route::view('users/registre', 'users.registre')->name('users.registre');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/inicio-sesion', 'login')->name('login.login');
    Route::post('/validar-registre', 'register')->name('login.registre');
    Route::post('/logout', 'logout')->name('login.logout');
});