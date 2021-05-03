<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\PostsController;

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
Route::get('/post/{id}', [HomeController::class, 'show'])->name('post');

Route::prefix('admin')->group(function () {
    Route::redirect('/', 'admin/login');
    Route::get('/login', LoginController::class);
    Route::get('/posts', [PostsController::class, 'form'])->name('admin/posts');
    Route::post('/posts/save', [PostsController::class, 'save'])->name('admin/posts/save');
});
