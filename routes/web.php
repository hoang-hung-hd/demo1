<?php

use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('providers')->group(function() {
    Route::get('',[ProviderController::class,'index'])->name('providers.index');
    Route::get('create',[ProviderController::class,'create'])->name('providers.create');
    Route::post('create',[ProviderController::class,'store'])->name('providers.store');
});

Route::prefix('posts')->group(function() {
    Route::get('',[PostController::class,'index'])->name('posts.index');
    Route::post('',[PostController::class,'store'])->name('posts.store');
    Route::get('/{id}',[PostController::class,'edit'])->name('posts.edit');
    Route::delete('/{id}',[PostController::class,'destroy'])->name('posts.destroy');
});
// Route::resource('posts', 'PostController');
