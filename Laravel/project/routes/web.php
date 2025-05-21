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

Route::get('/contact', function () {
    return view('website.index');
});


//============ Admin ==================================================

Route::get('/admin-login',[adminController::class,'index']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/add_categories', function () {
    return view('admin.add_categories');
});

Route::get('/manage_categories', function () {
    return view('admin.manage_categories');
});

Route::get('/add_products', function () {
    return view('admin.add_products');
});

Route::get('/manage_products', function () {
    return view('admin.manage_products');
});
Route::get('/manage_customers', function () {
    return view('admin.manage_customers');
});

Route::get('/manage_contacts', function () {
    return view('admin.manage_contacts');
});



// use App\Http\Controllers\demo1Controller;


//Route::get('/invokable',class::demoController);  // invokable controller call

//Route::get('/demo_add',[class::demo1Controller,'create']); // resource controller call
//Route::get('/demo_manage',[class::demo1Controller,'index']);
//Route::get('/demo_delete',[class::demo1Controller,'destroy']);




