<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\dashboardController;
use App\Http\Middleware\AdminAuth;
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

Route::get('/', [employeeController::class,'index']);
Route::get('/register', function () {
    return view('register');
});
// Route::get('/', function () {
//     return view('login');
// });



Route::post('/yash',[employeeController::class,'yash']);
Route::post('/register-employee',[employeeController::class,'create']);
Route::post('/login',[employeeController::class,'login']);
// Route::group(['middleware' => 'AdminAuth'], function () {
    Route::get('/logout',[employeeController::class,'logout']);
    Route::get('/home',[dashboardController::class,'index']);
    Route::get('/getdata',[dashboardController::class,'getData']);
    Route::get('/add-order',[dashboardController::class,'showOrder']);
    Route::post('/add/order',[dashboardController::class,'store']);
    Route::post('/get/rate',[dashboardController::class,'getRate']);
    Route::get('/view-report',[dashboardController::class,'showReport']);
// });
