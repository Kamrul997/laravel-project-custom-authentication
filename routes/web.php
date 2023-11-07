<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/todos/home', [HomeController::class, 'todoHome'])->name('homePage');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.user');
});


Route::post('/logout', [AuthController::class, 'logout'])->name('logout.user');
Route::post('/register', [AuthController::class, 'register'])->name('register.user');

Route::get('/create',[HomeController::class, 'create'])->name('createPage');