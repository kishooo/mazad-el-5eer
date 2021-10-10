<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/',[UserController::class,'index']);
Route::get('/Login',[UserController::class,'login']);
Route::post('/hide',[UserController::class,'Hide'])->name('hide');
Route::get('/Create',[UserController::class,'CreateProduct']);
Route::post('/Create',[UserController::class,'DoCreateProduct']);
Route::post('/Submit',[UserController::class,'SubmitValues'])->name('submit');
Route::get('/MyList',[UserController::class,'MyBid'])->name('MyList');
Route::get('/CheckWinner',[UserController::class,'CheckWinner'])->name('checkWinner');
Route::post('/BuyNow',[UserController::class,'BuyNow'])->name('BuyNow');
