<?php

use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view("404");
}); 

Route::get('', 'App\Http\Controllers\MainController@home');
Route::get('home', 'App\Http\Controllers\MainController@home');
Route::get('about', 'App\Http\Controllers\MainController@about');
Route::get('services', 'App\Http\Controllers\MainController@services');
Route::get('projects', 'App\Http\Controllers\MainController@services');
Route::get('testimonial', 'App\Http\Controllers\MainController@services');
Route::get('contact', 'App\Http\Controllers\MainController@contact');
  

