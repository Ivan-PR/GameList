<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MantenimentGameController;
use App\Http\Controllers\MantenimentLocalitzacionsController;
use App\Http\Controllers\MantenimentPlataformesController;
use App\Http\Controllers\MantenimentRomsizesController;
use App\Http\Controllers\MantenimentLanguagesController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;


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
Route::controller(HomeController::class)->group(function () {
    Route::match(['get', 'post'],"/","__invoke")->name("home");
    Route::match(['get', 'post'], '/game/{gameOne}', "viewGame")->name("home.viewGame");
});

Route::controller(MantenimentGameController::class)->group(function () {
    Route::get('mantenimiento/juegos', 'index')->name('mantenimentGame.index')->middleware('checkRole');
    Route::get('mantenimiento/juegos/crear', 'crear')->name('mantenimentGame.crear')->middleware('checkRole');
    Route::post('mantenimiento/juegos/almacenar', 'store')->name('mantenimentGame.store')->middleware('checkRole');
    Route::get('mantenimiento/juegos/editar/{game}', 'edit')->name('mantenimentGame.editar')->middleware('checkRole');
    Route::put('mantenimiento/juegos/actualizar/{game}', 'update')->name('mantenimentGame.update')->middleware('checkRole');
    Route::delete('mantenimiento/juegos/eliminar/{game}', 'delete')->name('mantenimentGame.eliminar')->middleware('checkRole');
    Route::view('mantenimiento/juegos/carga', 'manteniment.jocs.carga')->name('mantenimentGame.cargaView')->middleware('checkRole');
    Route::post('mantenimiento/juegos/carga', 'massiveLoad')->name('mantenimentGame.carga')->middleware('checkRole');
});

Route::controller(MantenimentLocalitzacionsController::class)->group(function () {
    Route::get('mantenimiento/localizaciones', 'index')->name('mantenimentLocalitzacions.index')->middleware('checkRole');
    Route::get('mantenimiento/localizaciones/crear', 'crear')->name('mantenimentLocalitzacions.crear')->middleware('checkRole');
    Route::post('mantenimiento/localizaciones/almacenar', 'store')->name('mantenimentLocalitzacions.store')->middleware('checkRole');
    Route::get('mantenimiento/localizaciones/editar/{location}', 'edit')->name('mantenimentLocalitzacions.editar')->middleware('checkRole');
    Route::put('mantenimiento/localizaciones/actualizar/{location}', 'update')->name('mantenimentLocalitzacions.update')->middleware('checkRole');
    Route::delete('mantenimiento/localizaciones/eliminar/{location}', 'delete')->name('mantenimentLocalitzacions.eliminar')->middleware('checkRole');
});

Route::controller(MantenimentPlataformesController::class)->group(function () {
    Route::get('mantenimiento/plataformas', 'index')->name('mantenimentPlataformes.index')->middleware('checkRole');
    Route::get('mantenimiento/plataformas/crear', 'crear')->name('mantenimentPlataformes.crear')->middleware('checkRole');
    Route::post('mantenimiento/plataformas/almacenar', 'store')->name('mantenimentPlataformes.store')->middleware('checkRole');
    Route::get('mantenimiento/plataformas/editar/{platform}', 'edit')->name('mantenimentPlataformes.editar')->middleware('checkRole');
    Route::put('mantenimiento/plataformas/actualizar/{platform}', 'update')->name('mantenimentPlataformes.update')->middleware('checkRole');
    Route::delete('mantenimiento/plataformas/eliminar/{platform}', 'delete')->name('mantenimentPlataformes.eliminar')->middleware('checkRole');
});

Route::controller(MantenimentLanguagesController::class)->group(function () {
    Route::get('mantenimiento/idiomas', 'index')->name('mantenimentLanguages.index')->middleware('checkRole');
    Route::get('mantenimiento/idiomas/crear', 'crear')->name('mantenimentLanguages.crear')->middleware('checkRole');
    Route::post('mantenimiento/idiomas/almacenar', 'store')->name('mantenimentLanguages.store')->middleware('checkRole');
    Route::get('mantenimiento/idiomas/editar/{language}', 'edit')->name('mantenimentLanguages.editar')->middleware('checkRole');
    Route::put('mantenimiento/idiomas/actualizar/{language}', 'update')->name('mantenimentLanguages.update')->middleware('checkRole');
    Route::delete('mantenimiento/idiomas/eliminar/{language}', 'delete')->name('mantenimentLanguages.eliminar')->middleware('checkRole');
});

Route::controller(MantenimentRomsizesController::class)->group(function () {
    Route::get('mantenimiento/romsizes', 'index')->name('mantenimentRomsizes.index')->middleware('checkRole');
    Route::get('mantenimiento/romsizes/crear', 'crear')->name('mantenimentRomsizes.crear')->middleware('checkRole');
    Route::post('mantenimiento/romsizes/almacenar', 'store')->name('mantenimentRomsizes.store')->middleware('checkRole');
    Route::get('mantenimiento/romsizes/editar/{romsize}', 'edit')->name('mantenimentRomsizes.editar')->middleware('checkRole');
    Route::put('mantenimiento/romsizes/actualizar/{romsize}', 'update')->name('mantenimentRomsizes.update')->middleware('checkRole');
    Route::delete('mantenimiento/romsizes/eliminar/{romsize}', 'delete')->name('mantenimentRomsizes.eliminar')->middleware('checkRole');
});

Route::controller(UserController::class)->group(function () {
    Route::view('usuarios', 'users.index')->middleware('auth')->name('users.index');
    Route::get('usuarios/crear', 'create')->name('users.create');
    Route::get('usuarios/editar/{id}', 'edit')->name('users.editar');
    Route::view('usuarios/login', 'users.login')->name('users.login');
    Route::view('usuarios/registro', 'users.registre')->name('users.registre');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/inicio-sesion', 'login')->name('login.login');
    Route::post('/validar-registro', 'register')->name('login.registre');
    Route::get('/logout', 'logout')->name('login.logout');
});
