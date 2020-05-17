<?php

use Illuminate\Support\Facades\Route;

Route::get('/config-cache', function () {
    \Artisan::call('config:cache');
    return "Configuration Cache Cleared";
});


// Frontend Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/help', 'HomeController@help')->name('help');
Route::get('/contact-us', 'HomeController@contact')->name('contact');

// User auth routes
Auth::routes();
Route::get('/dashboard', function () {
    return view('frontend.user.dashboard');
})->name('dashboard');






// Admin auth routes

Route::get('/admin/login', 'admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'admin\LoginController@login')->name('adminLogin');
Route::post('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/dashboard', 'admin\DashboardController@index')->name('dashboard');

// Admin Routes
// Route::prefix("admin")->name("admin.")->middleware("auth:admin")->group(function(){
// 	Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
// });
