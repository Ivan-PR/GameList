<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MantenimentController;
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

Route::controller(MantenimentController::class)->group(function () {
    Route::get('manteniment', 'index')->name('manteniment.index');
    Route::get('manteniment/crear','create')->name('manteniment.crear');
    Route::post('manteniment/almacenar', 'store')->name('manteniment.store');
    Route::get('manteniment/editar/{game}', 'edit')->name('manteniment.editar');
    Route::put('manteniment/actualizar/{game}', 'update')->name('manteniment.update');
    Route::get('manteniment/eliminar/{id}', 'delete')->name('manteniment.eliminar');
    Route::get('manteniment/carga', 'massiveLoad')->name('manteniment.carga');
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