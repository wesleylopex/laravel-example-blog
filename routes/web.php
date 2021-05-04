<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PostsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/post/{post}', [HomeController::class, 'show'])->name('post');

Route::prefix('admin')->group(function () {
    Route::redirect('/', 'admin/login');
    Route::get('/login', LoginController::class);

    Route::get('/posts', [PostsController::class, 'index'])->name('admin/posts');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('admin/posts/create');
    Route::get('/posts/update/{post}', [PostsController::class, 'update'])->name('admin/posts/update');
    Route::delete('/posts/delete/{post}', [PostsController::class, 'delete'])->name('admin/posts/delete');
    Route::post('/posts/save', [PostsController::class, 'save'])->name('admin/posts/save');
    Route::put('/posts/save', [PostsController::class, 'save'])->name('admin/posts/save');
});
