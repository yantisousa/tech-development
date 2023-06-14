<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModulosController;
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

Route::get('/', [HomeController::class, 'index'])->name('principal');

    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate');
    Route::get('/logout/{id}', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::prefix('/cursos')->controller(CursosController::class)->group(function(){
    Route::get('/index', 'index')->name('cursos.index');
    Route::get('/pesquisa', 'pesquisa')->name('cursos.pesquisa');
    Route::get('/filtros', 'filtros')->name('cursos.filtros');
    Route::get('/show/{id}', 'show')->name('cursos.show');
    Route::post('/store', 'store')->name('cursos.store');
});
Route::prefix('/modulos')->controller(ModulosController::class)->group(function(){
    Route::put('/update/{id}', 'update');
}); 