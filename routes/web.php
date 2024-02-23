<?php

use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenujalanController;
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

//Route Home View
Route::get('/', [HomeController::class, 'index']);

//Route to category
Route::prefix('category')->group(function (){
    Route::get('/foodBeverage', [FoodBeverageController::class, 'index']);
    Route::get('/beautyHealth', [BeautyHealthController::class, 'index']);
    Route::get('/homeCare', [HomeCareController::class, 'index']);
    Route::get('/babyKid', [BabyKidController::class, 'index']);
});

//Route user view
Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

//Route Penjualan view
Route::get('/penjualan', [PenujalanController::class, 'index']);
