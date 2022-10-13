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

Route::get('/', [\App\Http\Controllers\BbsController::class, 'index'])->name('main');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('bb.home');
Route::get('/home/create', [\App\Http\Controllers\BbsController::class, 'create'])->name('bb.create');
Route::post('/home/store', [\App\Http\Controllers\BbsController::class, 'store'])->name('bb.store');
Route::get('/{bb}', [\App\Http\Controllers\BbsController::class, 'show'])->name('bb.show');
Route::get('/home/{bb}/edit', [\App\Http\Controllers\BbsController::class, 'edit'])->name('bb.edit')->middleware('can:update,bb');
Route::patch('/home/{bb}', [\App\Http\Controllers\BbsController::class, 'update'])->name('bb.update')->middleware('can:update,bb');
Route::delete('/{bb}/delete', [\App\Http\Controllers\BbsController::class, 'delete'])->name('bb.delete')->middleware('can:destroy, bb');
