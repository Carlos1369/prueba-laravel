<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test',function(){
//    return "Welcome";
//});

//Route::get('/test',function(){
  //  return view ('test');
//});

//Route::get('/crud',function(){
  //  return view ('crud/index');
//});


//Route::get('/contact',function(){
  //return view('contact', ['name' => 'Andres']);
 //})->name('contact');
    

//Route::get('/contact2',function(){
  //  return view('contact2');
//})->name('contact2');

//Route::get('test',[PrimerControlador::class,'index']);
//Route::get('otro/{post}',[App\Http\Controllers\PrimerControlador::class,'otro']);

Route::resource('post', PostController::class);
    
