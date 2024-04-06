<?php

use App\Http\Controllers\NotesController;
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

Route::prefix('/notes')->group(function() {
    Route::get('/', [NotesController::class, 'index'])->name('notes-index');
    Route::get('/create', [NotesController::class, 'create'])->name('notes-create');
    Route::post('/', [NotesController::class, 'store'])->name('notes-store');
    Route::get('/{id}/edit', [NotesController::class, 'edit'])->where('id','[0-9]+')->name('notes-edit');
    Route::put('/{id}', [NotesController::class, 'update'])->where('id','[0-9]+')->name('notes-update');
    Route::delete('/{id}', [NotesController::class, 'destroy'])->where('id','[0-9]+')->name('notes-destroy');
});

Route::fallback(function(){
    return "erro ao acessar a rota";
});