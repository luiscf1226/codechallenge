<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueHaceresController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('quehaceres', QueHaceresController::class);
    //rutas extras para quehaceres eliminar todos y marcar como completado
    //se utilizo post debido a fallas con el metodo delete
    Route::post('quehaceres/delete-all', [QueHaceresController::class, 'deleteAll'])->name('quehaceres.delete-all');
    Route::patch('quehaceres/{quehacer}/complete', [QueHaceresController::class, 'complete'])->name('quehaceres.complete');
    Route::post('quehaceres/delete-completed', [QueHaceresController::class, 'deleteCompleted'])->name('quehaceres.delete-completed');
});