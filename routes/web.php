<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\shopping;

Route::get('/dashboard', [dashboard::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/products', [dashboard::class,'products'])->name('products')->middleware('auth');
Route::get('/crateNewProduct', [dashboard::class,'crateNewProduct'])->name('crateNewProduct')->middleware('auth');
Route::get('/showproduct_details',[dashboard::class,'showproduct_details'])->name('showdet')->middleware('auth');
Route::post('/create_new_details',[dashboard::class,'create_new_details'])->name('createnewdet')->middleware('auth');

Route::get('/delete', [dashboard::class,'delete'])->name('delete')->middleware('auth');
Route::get('/edit/{id}', [dashboard::class,'edit'])->name('edit')->middleware('auth');
Route::get('/update', [dashboard::class,'update'])->name('update')->middleware('auth');




Route::get('/', [shopping::class,'index'])->name('index');
Route::get('/cookies', [shopping::class,'cookies'])->name('cookies');
Route::get('/Cheesecake', [shopping::class,'Cheesecake'])->name('Cheesecake');
Route::get('/cake', [shopping::class,'cake'])->name('cake');
Route::get('/prodet/{id}', [shopping::class,'prodet'])->name('prodet');

Route::get('/add_to_cart', [shopping::class,'add_to_cart'])->name('add_to_cart');













Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
