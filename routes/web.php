<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Route::view('/', 'dashboard')->name('dashboard');

Route::get('/', App\Livewire\Dashboard::class)->name('dashboard');
Route::get('/posts', App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/posts/listpost', App\Livewire\Posts\Listpost::class)->name('posts.listpost');

// Route::get('/posts', [PostController::class, 'posts'])->name('posts.home');
// Route::get('/posts/listpost', [PostController::class, 'listPost'])->name('posts.listpost');
Route::post('/posts', [PostController::class, 'createPost']);
Route::resource('/users', UserController::class);
Route::get('/registration', [AuthController::class, 'register']);
