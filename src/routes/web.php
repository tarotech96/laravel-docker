<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::redirect('/', '/login');

// ログイン
Route::get('/login', [AuthController::class, 'login']);
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// 楼録
Route::get('/register', [AuthController::class, 'register']);
Route::post('post-registration', [AuthController::class, 'postRegister'])->name('register.post');

//　ダッシュボード
Route::get('/admin', [AuthController::class, 'index']);

//　ログアウト
Route::get('/logout', [AuthController::class, 'logout']);