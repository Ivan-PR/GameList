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

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('mantenimiento/juegos', [MantenimentGameController::class, 'index'])->name('mantenimentGame.index');
    Route::get('mantenimiento/juegos/crear', [MantenimentGameController::class, 'crear'])->name('mantenimentGame.crear');
    Route::post('mantenimiento/juegos/almacenar', [MantenimentGameController::class, 'store'])->name('mantenimentGame.store');
    Route::get('mantenimiento/juegos/editar/{game}', [MantenimentGameController::class, 'edit'])->name('mantenimentGame.editar');
    Route::put('mantenimiento/juegos/actualizar/{game}', [MantenimentGameController::class, 'update'])->name('mantenimentGame.update');
    Route::delete('mantenimiento/juegos/eliminar/{game}', [MantenimentGameController::class, 'delete'])->name('mantenimentGame.eliminar');
    Route::view('mantenimiento/juegos/carga', 'manteniment.jocs.carga')->name('mantenimentGame.cargaView');
    Route::post('mantenimiento/juegos/carga', [MantenimentGameController::class, 'massiveLoad'])->name('mantenimentGame.carga');
});


// Route::controller(MantenimentGameController::class)->group(function () {
//     Route::get('mantenimiento/juegos', 'index')->name('mantenimentGame.index');
//     Route::get('mantenimiento/juegos/crear', 'crear')->name('mantenimentGame.crear');
//     Route::post('mantenimiento/juegos/almacenar', 'store')->name('mantenimentGame.store');
//     Route::get('mantenimiento/juegos/editar/{game}', 'edit')->name('mantenimentGame.editar');
//     Route::put('mantenimiento/juegos/actualizar/{game}', 'update')->name('mantenimentGame.update');
//     Route::delete('mantenimiento/juegos/eliminar/{game}', 'delete')->name('mantenimentGame.eliminar');
//     Route::view('mantenimiento/juegos/carga', 'manteniment.jocs.carga')->name('mantenimentGame.cargaView');
//     Route::post('mantenimiento/juegos/carga', 'massiveLoad')->name('mantenimentGame.carga');
// });

Route::controller(MantenimentLocalitzacionsController::class)->group(function () {
    Route::get('mantenimiento/localizaciones', 'index')->name('mantenimentLocalitzacions.index');
    Route::get('mantenimiento/localizaciones/crear', 'crear')->name('mantenimentLocalitzacions.crear');
    Route::post('mantenimiento/localizaciones/almacenar', 'store')->name('mantenimentLocalitzacions.store');
    Route::get('mantenimiento/localizaciones/editar/{location}', 'edit')->name('mantenimentLocalitzacions.editar');
    Route::put('mantenimiento/localizaciones/actualizar/{location}', 'update')->name('mantenimentLocalitzacions.update');
    Route::delete('mantenimiento/localizaciones/eliminar/{location}', 'delete')->name('mantenimentLocalitzacions.eliminar');
});

Route::controller(MantenimentPlataformesController::class)->group(function () {
    Route::get('mantenimiento/plataformas', 'index')->name('mantenimentPlataformes.index');
    Route::get('mantenimiento/plataformas/crear', 'crear')->name('mantenimentPlataformes.crear');
    Route::post('mantenimiento/plataformas/almacenar', 'store')->name('mantenimentPlataformes.store');
    Route::get('mantenimiento/plataformas/editar/{platform}', 'edit')->name('mantenimentPlataformes.editar');
    Route::put('mantenimiento/plataformas/actualizar/{platform}', 'update')->name('mantenimentPlataformes.update');
    Route::delete('mantenimiento/plataformas/eliminar/{platform}', 'delete')->name('mantenimentPlataformes.eliminar');
});

Route::controller(MantenimentLanguagesController::class)->group(function () {
    Route::get('mantenimiento/idiomas', 'index')->name('mantenimentLanguages.index');
    Route::get('mantenimiento/idiomas/crear', 'crear')->name('mantenimentLanguages.crear');
    Route::post('mantenimiento/idiomas/almacenar', 'store')->name('mantenimentLanguages.store');
    Route::get('mantenimiento/idiomas/editar/{language}', 'edit')->name('mantenimentLanguages.editar');
    Route::put('mantenimiento/idiomas/actualizar/{language}', 'update')->name('mantenimentLanguages.update');
    Route::delete('mantenimiento/idiomas/eliminar/{language}', 'delete')->name('mantenimentLanguages.eliminar');
});

Route::controller(MantenimentRomsizesController::class)->group(function () {
    Route::get('mantenimiento/romsizes', 'index')->name('mantenimentRomsizes.index');
    Route::get('mantenimiento/romsizes/crear', 'crear')->name('mantenimentRomsizes.crear');
    Route::post('mantenimiento/romsizes/almacenar', 'store')->name('mantenimentRomsizes.store');
    Route::get('mantenimiento/romsizes/editar/{romsize}', 'edit')->name('mantenimentRomsizes.editar');
    Route::put('mantenimiento/romsizes/actualizar/{romsize}', 'update')->name('mantenimentRomsizes.update');
    Route::delete('mantenimiento/romsizes/eliminar/{romsize}', 'delete')->name('mantenimentRomsizes.eliminar');
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
