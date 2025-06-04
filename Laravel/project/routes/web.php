<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\demo1Controller;

use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\productController;

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

// ================== Website ==================================================
Route::get('/', function () {
    return view('website.index'); // view page from view/website/index.php
});

Route::get('/index', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/services', function () {
    return view('website.services');
});



Route::get('/signup',[customerController::class,'create']);
Route::post('/insert_user',[customerController::class,'store']);


Route::get('/login',[customerController::class,'login']);
Route::post('/authlogin',[customerController::class,'authlogin']);

Route::get('/profile',[customerController::class,'profile']);
Route::get('/edit_profile',[customerController::class,'edit']);

Route::get('/userlogout',[customerController::class,'userlogout']);



Route::get('/contact',[ContactController::class,'create']);
Route::post('/insert_contact',[ContactController::class,'store']);


//============ Admin ==================================================

Route::get('/admin-login',[adminController::class,'index']);
Route::post('/adminlogin',[adminController::class,'authlogin']);

Route::get('/adminlogout',[adminController::class,'adminlogout']);


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/add_products',[productController::class,'create']);
Route::get('/manage_products',[productController::class,'index']);
Route::delete('/manage_products/{id}',[productController::class,'destroy']);

Route::get('/manage_customers',[customerController::class,'index']);
Route::get('/manage_customers/{id}',[customerController::class,'destroy']);

Route::get('/manage_contacts',[ContactController::class,'index']);
Route::get('/manage_contacts/{id}',[ContactController::class,'destroy']);


Route::get('/add_categories',[categoryController::class,'create']);
Route::get('/manage_categories',[categoryController::class,'index']);
Route::get('/manage_categories/{id}',[categoryController::class,'destroy']);

// use App\Http\Controllers\demo1Controller;


//Route::get('/invokable',class::demoController);  // invokable controller call

//Route::get('/demo_add',[class::demo1Controller,'create']); // resource controller call
//Route::get('/demo_manage',[class::demo1Controller,'index']);
//Route::get('/demo_delete/{id}',[class::demo1Controller,'destroy']);




