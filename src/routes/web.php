<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
route::get('/attendance', [UserController::class, 'attendance']);

Route::post('/register', [UserController::class, 'newUser']); //新規登録
Route::post('/login', [UserController::class, 'loginUser']); //ログイン

//管理画面
Route::get('/admin/login', [UserController::class, 'adminLogin']);
Route::post('/admin/attendance/list', [UserController::class, 'adminUser']);