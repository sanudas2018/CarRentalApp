<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/
// ========= (Front End) =========
// Home Route
route::get('/', [AdminController::class, 'home']);


route::get('/home',[AdminController::class,'index'])->name('home');

// Admin
// Front End
route::get('/car_page',[AdminController::class,'CarPage']);
route::get('/CarListPage',[AdminController::class,'CarList']);

// Admin Control:
// Back End 

route::post('/createCar',[AdminController::class,'CreateCar']);

route::get('/car_delete/{if}',[AdminController::class,'carDelete']);




