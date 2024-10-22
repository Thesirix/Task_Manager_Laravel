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

Route::get('/',[TaskController::class, 'index'])->name('index');
Route::get('tache/creer',[TaskController::class, 'create'])->name('create');
Route::post('tache/creer-post',[TaskController::class, 'store'])->name('store');
Route::get('tache/modifier/{id}',[TaskController::class, 'edit'])->name('edit');
Route::put('tache/update/{id}',[TaskController::class, 'update'])->name('update');

