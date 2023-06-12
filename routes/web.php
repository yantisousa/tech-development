<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Cursos;
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

Route::get('/', [HomeController::class, 'index']);
Route::prefix('/users')->controller(UserController::class)->group(function(){
    Route::get('/login', 'login')->name('user.login');
    Route::post('/auth', 'auth')->name('user.auth');
});
Route::prefix('/cursos')->controller(CursosController::class)->group(function(){
    Route::get('/index', 'index')->name('cursos.index');
    Route::get('/pesquisa', 'pesquisa')->name('cursos.pesquisa');
    Route::get('/filtros', 'filtros')->name('cursos.filtros');
});
