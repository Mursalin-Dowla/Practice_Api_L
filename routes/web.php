<?php

use App\Http\Controllers\ApiBladeController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
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

Route::get('/products',[ProductController::class, 'index']);
Route::get('/addproducts',[ApiBladeController::class, 'index'])->name('blade.addproduct');
Route::get('/editproducts',[ApiBladeController::class, 'edit'])->name('blade.editproduct');
