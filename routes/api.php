<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/products', [ProductController::class, 'index']);        // 讀取所有商品
Route::get('/products/{id}', [ProductController::class, 'show']);    // 讀取單個商品
Route::post('/products', [ProductController::class, 'store']);       // 新增商品
Route::put('/products/{id}', [ProductController::class, 'update']);  // 更新商品
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // 刪除商品
