<?php

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
//Route::delete('/posts/{post}', [PostController::class, 'destroy']);

//Route::put('/posts/{post}', [PostController::class, 'update']);

//Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']); //show just one post

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

/*Route::get('/', function() {
    return view('welcome');
});*/
