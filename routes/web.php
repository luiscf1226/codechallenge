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
    Route::get('quehaceres', [QueHaceresController::class, 'index'])->name('quehaceres.index');
    //rutas extras para quehaceres eliminar todos y marcar como completado
    Route::post('quehaceres/delete-all', [QueHaceresController::class, 'deleteAll'])->name('quehaceres.delete-all');
    Route::patch('quehaceres/{quehacer}/complete', [QueHaceresController::class, 'complete'])->name('quehaceres.complete');

});
