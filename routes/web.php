<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class,'homepage'])->name('homepage');


Route::get('/manga/index',[MangaController::class,'index'])->name('manga.index');
Route::get('/manga/create',[MangaController::class,'create'])->name('manga.create');
Route::post('/manga/store',[MangaController::class,'store'])->name('manga.store');
Route::get('/manga/show/{manga}',[MangaController::class,'show'])->name('manga.show');
Route::get('/manga/edit/{manga}',[MangaController::class,'edit'])->name('manga.edit');
Route::put('/manga/update/{manga}',[MangaController::class,'update'])->name('manga.update');
Route::delete('/manga/destroy/{manga}',[MangaController::class,'destroy'])->name('manga.destroy');