<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

//入力フォーム
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirmation', [ContactController::class, 'confirmation']);

//確認フォーム
Route::post('/add', [ContactController::class, 'create']);
Route::post('/confirmation/modify', [ContactController::class, 'modify']);
Route::get('/thanks', [ContactController::class, 'thanks']);

//データ検索フォーム
Route::get('/data', [DataController::class, 'index']);
Route::post('/search', [DataController::class, 'search']);
Route::delete('/down', [DataController::class, 'destroy']);

// テスト用
Route::get('/test', [TestController::class, 'testIndex']);
Route::post('/test', [TestController::class, 'testValue']);
Route::get('/echo', [TestController::class, 'echo']);