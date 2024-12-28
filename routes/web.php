<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [ AuthController::class, 'login'])->name('login');
Route::post('/login', [ AuthController::class, 'loginPost'])->name('login-post');

Route::get('/signup', [ AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [ AuthController::class, 'signupPost'])->name('signup-post');

Route::get('/logout', [ AuthController::class, 'logout'])->name('logout');

$router->group(['middleware' => 'auth:web'], function () use ($router) {
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/dd', function(){ echo "sadasd"; });
});

Route::get('/demo', function () {
    return view('demo');
});
