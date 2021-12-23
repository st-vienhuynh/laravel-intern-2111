<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::prefix('tasks')->name('tasks.')->group(function () {
    Route::get('', [TaskController::class, 'index'])->name('index');;
    Route::get('/create', [TaskController::class, 'create'])->name('create');
    Route::get('/{id}', [TaskController::class, 'show'])->name('show');
    Route::post('', [TaskController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TaskController::class, 'update'])->name('update');
    Route::delete('/{id}', [TaskController::class, 'destroy'])->name('destroy');
});
