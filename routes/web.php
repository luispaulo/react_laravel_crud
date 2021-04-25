<?php

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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', function () {
        return view('auth.login');
    });
    Auth::routes();
    Route::get('/alunos', [App\Http\Controllers\AlunosController::class, 'index'])->middleware('auth');
});

//ALTERNATIVA PARA O METODO ABAIXO  ( Route::get('/alunos', 'AlunosController@index'); )
Route::get('/alunos', [App\Http\Controllers\AlunosController::class, 'index'])->middleware('auth');
Route::get('/alunos/novo', [App\Http\Controllers\AlunosController::class, 'novo'])->middleware('auth');

Route::post('/alunos/adicionar', [App\Http\Controllers\AlunosController::class, 'adicionar'])->middleware('auth');
Route::get('/alunos/{id}/editar', [App\Http\Controllers\AlunosController::class, 'editar'])->middleware('auth');
Route::post('/alunos/update/{id}', [App\Http\Controllers\AlunosController::class, 'update'])->middleware('auth');
Route::delete('/alunos/delete/{id}', [App\Http\Controllers\AlunosController::class, 'delete'])->middleware('auth');


Auth::routes();

Route::get('/alunos/agenda', function () {
    return view('alunos.agenda');
});
