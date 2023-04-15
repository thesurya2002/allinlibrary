<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
})->name('home');

Route::get('/login{type?}',[RegisterController::class,'index'])->name('login');
Route::get('/login{type?}',[RegisterController::class,'index'])->name('login');

Route::post('/user/regiser',[RegisterController::class,'register'])->name('user.register');

Route::get('/librarylogin{type?}',[LoginController::class,'index'])->name('librarylogin');
Route::get('/studentlogin{type?}',[LoginController::class,'index'])->name('studentlogin');
