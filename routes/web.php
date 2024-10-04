<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
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

route::get('/car_delete/{id}',[AdminController::class,'carDelete']);


route::get('/carEditPage/{id}',[AdminController::class,'carUpdate']);



route::post('/car_update/{id}',[AdminController::class,'CarUpdateSingle']);


// Car details 

route::get('/car_details/{id}',[FrontendController::class,'CarDetails']);


// room booking 
route::post('/add_booking/{id}',[FrontendController::class,'add_booking']);



