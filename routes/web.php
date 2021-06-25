<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;
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

Route::get('/dashboard', function () {

    return view('dashboard', compact('alunos'));
})->middleware(['auth'])->name('dashboard');

Route::resource('/alunos', AlunosController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/professores', ProfessorController::class);

require __DIR__.'/auth.php';
