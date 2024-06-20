<?php

use Illuminate\Support\Facades\Route;

// 新規作成したControllerの定義
use App\Http\Controllers\HelloController;

// 課題「静的なページを表示しよう」
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/hello', [HelloController::class, 'index']);

// 課題「静的なページを表示しよう」
Route::get('/posts', [PostController::class, 'index']);