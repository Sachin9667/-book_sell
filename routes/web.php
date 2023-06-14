<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

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



Route::controller(AuthController::class)->group(function (){

    Route::get('register','register')->name('register');
    Route::get('/register/store',[AuthController::class,'store'])->name('register.store');

    Route::get('login','login')->name('login');
    Route::post('/dashboard',[AuthController::class,'loginAction'])->name('login.loginAction');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/',[BookController::class,'index'])->name('books.index');
Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::get('/books/store',[BookController::class,'store'])->name('books.store');
Route::get('/books/{id}/edit',[BookController::class,'edit'])->name('books.edit');
Route::get('/books/{id}/update',[BookController::class,'update'])->name('books.update');
Route::get('/books/{id}/edit',[BookController::class,'edit'])->name('books.edit');
Route::get('/books/{id}/delete',[BookController::class,'destroy'])->name('books.destroy');