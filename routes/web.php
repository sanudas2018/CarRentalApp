<?php

use App\Http\Controllers\AdminController;
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
// ========= (Front End) =========
// Home Route
route::get('/', [AdminController::class, 'home']);


route::get('/home',[AdminController::class,'index'])->name('home');

// Admin
// Front End
route::get('/create_car',[AdminController::class,'CarPage']);

// Admin Control:
// Back End 

route::post('/createCar',[AdminController::class,'CreateCar']);