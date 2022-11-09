<?php

use App\Http\Controllers\BoissonController;
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

Route::get('/', [BoissonController::class, 'home'])->name('home');
Route::post('/store/Boisson/', [BoissonController::class, 'store'])->name('store.boisson');
Route::get('/create', [BoissonController::class, 'create'])->name('create');
Route::get('/show/{id}', [BoissonController::class, 'show'])->name('show.Boisson');
Route::get('/delete/{id}', [BoissonController::class, 'delete'])->name('delete.Boisson');
Route::get('/edit/{id}', [BoissonController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [BoissonController::class, 'update'])->name('update.Boisson');