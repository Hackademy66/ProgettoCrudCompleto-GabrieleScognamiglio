<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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

Route::get('/comic/index',[ComicController::class,'index'])->name('comic.index');
Route::get('/comic/create',[ComicController::class,'create'])->name('comic.create');
Route::post('/comic/store',[ComicController::class,'store'])->name('comic.store');
Route::get('/comic/show/{comic}',[ComicController::class,'show'])->name('comic.show');
Route::get('/comic/edit/{comic}',[ComicController::class,'edit'])->name('comic.edit');
Route::put('/comic/update/{comic}',[ComicController::class,'update'])->name('comic.update');
Route::delete('/comic/destroy/{comic}',[ComicController::class,'destroy'])->name('comic.destroy');