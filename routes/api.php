<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', 'App\Http\Controllers\HomeController@Home');
Route::redirect('/home', '/api/');
Route::post("user/register","Auth/RegisterController@Home")->name("user.register");