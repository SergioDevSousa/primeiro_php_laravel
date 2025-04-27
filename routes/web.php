<?php

use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });


use app\Http\Controllers\TarefaController;

Route::get('/tarefas', [TarefaController::class, 'index']);
Route::get('/tarefas/create', [TarefaController::class, 'create']);
Route::post('tarefas', [TarefaController::class, 'store']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';