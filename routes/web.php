<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index'])->name('user.all');
Route::get('/user/entry',[HomeController::class,'create'])->name('user.add');
Route::post('/user/store',[HomeController::class,'storing'])->name('user.save');
Route::get('/user/getOne/{id}',[HomeController::class,'findById'])->name('user.findUser');
Route::post('/user/change',[HomeController::class,'update'])->name('user.update');
Route::delete('/user/out/{id}',[HomeController::class,'remove'])->name('user.out');

//class related route
Route::get('/class/allClass',[ClassController::class,'index'])->name('class.all');
Route::get('/class/create',[ClassController::class,'create'])->name('class.new');
Route::post('/class/store',[ClassController::class,'store'])->name('class.save');
Route::get('/class/getOne/{id}',[ClassController::class,'findById'])->name('class.findclass');
Route::post('/class/change',[ClassController::class,'update'])->name('class.update');
Route::delete('/class/out/{id}',[ClassController::class,'remove'])->name('class.out');

//subject
Route::get('/sub/all',[SubjectsController::class,'index'])->name('sub.all');
Route::get('/sub/entry',[SubjectsController::class,'create'])->name('sub.add');
Route::post('/sub/store',[SubjectsController::class,'store'])->name('sub.save');
Route::get('/sub/getOne/{id}',[SubjectsController::class,'findById'])->name('sub.findsub');
Route::post('/sub/change',[SubjectsController::class,'update'])->name('sub.update');
Route::delete('/sub/out/{id}',[SubjectsController::class,'remove'])->name('sub.out');
