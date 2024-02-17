<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
//お問い合わせフォームcontactsテーブル用ContactController
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);

//お問い合わせフォームcategorisテーブル用CategoryController


//ログイン認証用AuthController
//Route::middleware('auth')->group(function () {
//    Route::get('/', [AuthController::class, 'register']);
//});