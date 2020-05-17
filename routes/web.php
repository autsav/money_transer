<?php

use Illuminate\Support\Facades\Route;

Route::get('/config-cache', function () {
    \Artisan::call('config:cache');
    return "Configuration Cache Cleared";
});


// Frontend Routes
Route::get('/', 'HomeController@index')->name('home');
// Route::POST('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('register');

// Route::POST('/loggedin', 'Auth\LoginController@login')->name('loggedin');
// Route::get('/register', 'RegisterController@store')->name('register');
// Route::get('/verification', 'VerificationrController@index')->name('verification');




Route::get('/about-us', 'HomeController@about')->name('about');
Route::get('/help', 'HomeController@help')->name('help');
Route::get('/contact-us', 'HomeController@contact')->name('contact');

// User auth routes 
Auth::routes(['verify' => true]);
Route::get('/dashboard', 'DashboardController@index')->middleware('verified')->name('dashboard');







// Admin auth routes

Route::get('/admin/login', 'admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'admin\LoginController@login')->name('adminLogin');
Route::post('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/dashboard', 'admin\DashboardController@index')->name('dashboard');

//users
Route::get('/dashboard/users', 'admin\UserController@index')->name('dashboard.users');
Route::post('/dashboard/users/store', 'admin\UserController@store')->name('users.store');
Route::post('/dashboard/users/json', 'admin\UserController@getuserJson')->name('users.json');
Route::get('/dashboard/users/delete/{id}', 'admin\UserController@destroy')->name('users.delete');
Route::get('/dashboard/users/edit/{id}','admin\UserController@edit')->name('users.edit');

Route::get('/dashboard/admins', 'admin\AdminController@index')->name('dashboard.admins');
Route::post('/dashboard/admins/store', 'admin\AdminController@store')->name('admins.store');
Route::post('/dashboard/admins/json', 'admin\AdminController@getadminJson')->name('admins.json');
Route::get('/dashboard/admins/delete/{id}', 'admin\AdminController@destroy')->name('admin.delete');
Route::get('/dashboard/admins/edit/{id}','admin\AdminController@edit')->name('admin.edit');


// Admin Routes
// Route::prefix("admin")->name("admin.")->middleware("auth:admin")->group(function(){
// 	Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
// });
