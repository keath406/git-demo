<?php

use Illuminate\Support\Facades\Route;

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