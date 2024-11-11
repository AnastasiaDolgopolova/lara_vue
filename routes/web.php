<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{page}', [App\Http\Controllers\IndexController::class, 'index'])->where('page', '.*');
/*Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/persons', [App\Http\Controllers\PersonController::class, 'index'])->name('persons');*/
