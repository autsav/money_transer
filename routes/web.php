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
Route::post('/getExchangeResult', 'HomeController@getExchangeResult')->name('getExchangeResult');

// User auth routes
Auth::routes(['verify' => true]);
Route::middleware(['auth','verified'])->group(function() {
    Route::get('/send-money', 'UserController@send_money')->name('send-money');
    Route::get('/dashboard', 'UserController@index')->name('dashboard');
});







// Admin auth routes

/*Route::get('/admin/login', 'admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'admin\LoginController@login')->name('adminLogin');
Route::post('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/dashboard', 'admin\DashboardController@index')->name('admin.dashboard');
Route::redirect('/admin', '/admin/dashboard');

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
Route::get('/dashboard/admins/edit/{id}','admin\AdminController@edit')->name('admin.edit');*/


// Admin Routes
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::redirect('/', '/admin/dashboard');
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    Route::middleware('auth:admin')->group(function(){
        Route::get('/dashboard','DashboardController@index')->name('dashboard');
    });
});

// Route::prefix("admin")->name("admin.")->middleware("auth:admin")->group(function(){
//     Route::redirect('/', '/dashboard');
//     Route::get('/login', 'admin\LoginController@showLoginForm')->name('login');
//     Route::post('/login', 'admin\LoginController@login')->name('adminLogin');
//     Route::post('/logout', 'admin\LoginController@logout')->name('logout');

//users
/*     Route::get('/users', 'admin\UserController@index')->name('users');
     Route::post('/users/store', 'admin\UserController@store')->name('users.store');
     Route::post('/users/json', 'admin\UserController@getuserJson')->name('users.json');
     Route::get('/users/delete/{id}', 'admin\UserController@destroy')->name('users.delete');
     Route::get('/users/edit/{id}','admin\UserController@edit')->name('users.edit');

     Route::get('/admins', 'admin\AdminController@index')->name('dashboard.admins');
     Route::post('/admins/store', 'admin\AdminController@store')->name('admins.store');
     Route::post('/admins/json', 'admin\AdminController@getadminJson')->name('admins.json');
     Route::get('/admins/delete/{id}', 'admin\AdminController@destroy')->name('admin.delete');
     Route::get('/admins/edit/{id}','admin\AdminController@edit')->name('admin.edit');*/
//});
