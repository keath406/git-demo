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

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // 顯示商品列表
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // 顯示新增商品表單
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // 保存新增商品
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // 顯示編輯商品表單
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // 更新商品
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // 刪除商品


Route::get('/testpage', function () {
    return view('testpage');
});

