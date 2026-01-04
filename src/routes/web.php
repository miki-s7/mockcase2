<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;

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


Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginUser']); //ログイン

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'newUser']); //新規登録

Route::middleware('auth')->group(function () {
    Route::get('/attendance', [UserController::class, 'attendance']);
});//ログインしていない時リダイレクト

//管理画面
Route::get('/admin/login', [UserController::class, 'adminLogin']);
Route::post('/admin/login', [UserController::class, 'adminUser']); // ログイン処理
Route::get('/admin/attendance/list', [UserController::class, 'adminList']); // ログイン後画面


//打刻
Route::post('/attendance/clock-in', [AttendanceController::class, 'clockIn']);

