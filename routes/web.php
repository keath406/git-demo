<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/html-example', function () {
    return view('html_example');
});
Route::get('/php-example', function () {
    $name = "John";
    $age = 25;
    
    if ($age > 18) {
        $message = "你是一名成年人";
    } else {
        $message = "你還未成年";
    }

    return view('php_example', compact('name', 'age', 'message'));
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/user/{name}', [App\Http\Controllers\UserController::class, 'show']);

Route::get('/products', [ProductController::class, 'index']);           // 顯示所有商品
Route::get('/products/create', [ProductController::class, 'create']);   // 顯示新增商品表單
Route::post('/products', [ProductController::class, 'store']);          // 提交新增的商品資料
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);  // 顯示編輯商品表單
Route::put('/products/{id}', [ProductController::class, 'update']);     // 更新指定商品
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // 刪除指定商品
Route::get('/testpage', function () {
    return view('testpage');
});

