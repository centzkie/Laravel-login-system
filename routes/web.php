<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/user', function (Request $request) { 
//      dd($request);
//      return null;
//  });

// Route::get('/response/{name}', function ($name,) {
//     return response($name, 200);
// });

Route::get('/', function () {
    return view("index");
});

Route::get('/', [UserController:: class, 'viewAll'])->middleware('auth');
Route::get('/login', [UserController:: class, 'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController:: class, 'process']);
Route::get('/register', [UserController:: class, 'register'])->name('register')->middleware('guest');
Route::post('/store', [UserController:: class, 'store']);
Route::post('/logout', [UserController:: class, 'logout']);