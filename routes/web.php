<?php

use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', function () {
    return view('welcome');
});

// User auth routes
Auth::routes();
Route::get('/dashboard', function () {
    return view('frontend.user.dashboard');
})->name('dashboard');






// Admin auth routes

Route::get('/admin/login', 'admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/loggedin', 'admin\LoginController@login')->name('adminLogin');
Route::post('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');

// Admin Routes
Route::prefix("admin")->name("admin.")->middleware("auth:user")->group(function(){
	Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
});
