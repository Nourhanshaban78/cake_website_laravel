<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;





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

//user
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/blog',[HomeController::class,'blog']);
Route::get('/shop',[HomeController::class,'shop']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/shop-details',[HomeController::class,'shop_details']);
Route::get('/shoping-cart/{id}',[HomeController::class,'shoping_cart']);
Route::get('/checkout/{id}',[HomeController::class,'checkout']);
Route::get('/wisslist',[HomeController::class,'wisslist']);
Route::get('/class',[HomeController::class,'class']);
Route::get('/blog-details',[HomeController::class,'blog_details']);
Route::post('/addrequirement',[HomeController::class,'addrequirement']);
Route::get('/get-chef',[HomeController::class,'get_chef']);
Route::post('/add-cart/{id}',[HomeController::class,'add_cart']);
Route::get('/deleted/{id}',[HomeController::class,'deleted']);
Route::post('/check',[HomeController::class,'check']);
Route::post('/send-contact',[HomeController::class,'send_contact']);










//admin
Route::get('/menu',[AdminController::class,'menu']);
Route::post('/addmenu',[AdminController::class,'addmenu']);
Route::get('/all-menu',[AdminController::class,'all_menu']);
Route::get('/deleted-menu/{id}',[AdminController::class,'deleted_menu']);
Route::get('/update_menu/{id}',[AdminController::class,'update_menu']);
Route::post('/editmenu/{id}',[AdminController::class,'edit_menu']);
Route::get('/chef',[AdminController::class,'chef']);
Route::post('/addchef',[AdminController::class,'addchef']);
Route::get('/all-chef',[AdminController::class,'all_chef']);
Route::get('/deleted-chef/{id}',[AdminController::class,'deleted_chef']);
Route::get('/updated-chef/{id}',[AdminController::class,'updated_chef']);
Route::post('/editchef/{id}',[AdminController::class,'edit_chef']);
Route::get('/requirement',[AdminController::class,'requirement']);
Route::get('/get-contact',[AdminController::class,'get_contact']);
Route::get('/get-checkout',[AdminController::class,'get_checkout']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
