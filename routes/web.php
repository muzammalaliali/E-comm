<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


// Route::get('/loginPage',function(){
//     return view('login');
// });
// Route::post('/login',[UserController::class,'login']);
// Route::get("/",[ProductController::class,'index']);



Route::get('/',function(){
    return view('header');
});
Route::get('/login',function(){
    return view('login');
});
Route::get("/product",[ProductController::class,'index']);
