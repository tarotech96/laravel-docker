<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\UserController;

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

Route::redirect('/', 'login');

// ログイン
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

// 楼録
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegister'])->name('register.post');

// 管理者ページ
Route::redirect('admin', 'admin/dashboard');
Route::prefix('admin')->middleware('auth')->group(function () {
        //　ダッシュボード
        Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');

        // ユーザー一覧
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::prefix('users')->group(function () {
                // ユーザー追加
                Route::get('create', [UserController::class, 'create'])->name('users.create');
                //　ユーザー更新
                Route::get('edit', [UserController::class, 'edit'])->name('users.edit');
                //　ユーザー削除
                Route::delete('delete', [UserController::class, 'delete'])->name('users.delete');
                // ユーザー保存
                Route::post('save', [UserController::class, 'save'])->name('users.save');
                // ユーザーアップデート
                Route::put('update', [UserController::class, 'update'])->name('users.update');
                // プロフィール
                Route::get('profile', [UserController::class, 'profile'])->name('profile');
        });
});

//　ログアウト
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// エラー
Route::get('access_denied', [ErrorController::class, 'accessDenied'])->name('access-denied');
