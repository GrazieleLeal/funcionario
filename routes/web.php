<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('frontend.conteudoTemplate');
});

Route::resource('funcionario', FuncionarioController::class);
Route::resource('cliente', ClienteController::class);


//Route::get('inseretete', [FuncionarioController::class, 'inseretete']);
//Route::get('insereteste', [CargoController::class, 'insereteste']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
