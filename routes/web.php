<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\HomeController;
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


//chuyen den ham showWelcome trong homeController cua controller

Route::get('/welcome', [\App\Http\Controllers\HomeController::class, 'showWelcome']);

Route::get('/users', [UserController::class, 'index']) ->name('users.index');

Route::get('/users/detail/{id}', [UserController::class, 'detail']) ->name('users.detail');

//Route::get('/', function() {
//    return view('welcome');
//});
// dinh tuyen co ban
//Route::get('/home', function () {
//   return view('home');
//});

// dinh tuyen vao muc con cua mot trang
//Route::get('/about/directions', function() {
//    return 'directions go here';
//});
// dinh tuyen bang any
//Route::any('submit-form', function() {
//   return 'process Form';
//});
// dinh tuyen co tham so 
//Route::get('/about/{price}/{art}', function($price, $art) {
    //return "The product $art is $price";
//});
// uy quyen
//Route::get('where', function() {
//    return Redirect::to('about/directions');
//});

