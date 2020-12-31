<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/home', '/api/');
Route::get('/', 'HomeController@Home');
Route::post("user/register","Auth\RegisterController@register")->name("user.register");
Route::post("user/login","Auth\LoginController@login")->name("user.login");
Route::post("admin/login","Auth\LoginControllerAdmin@login")->name("admin.login");

Route::get("admin/users", "AdminstratorController@allUsers");
Route::get("admin/remove/user/{id}", "AdminstratorController@removeUser");
Route::get("admin/verify/user/{id}", "AdminstratorController@approveUser");

Route::get("manager/stadiums","ManagerController@allStadiums");
Route::get("manager/teams","ManagerController@allTeams");
Route::post("manager/add/match","ManagerController@addMatch");
Route::post("manager/update/match/{id}","ManagerController@updateMatch");
Route::post("manager/add/stadium","ManagerController@addStadium");

Route::get("fan/informations","FanController@informations");
Route::post("fan/update","FanController@update");
Route::get("fan/reserve","FanController@reserve");
Route::get("fan/cancel/reservation","FanController@cancelReservation");

Route::get("matches","SharedController@allMatches");
Route::get("match/{id}","SharedController@match");

Route::get('logout',"Auth\LogoutController@logout");