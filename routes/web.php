<?php

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Không đăng nhập cũng vào được

Route::group(['middleware' => ['auth']],function() {
    // Đăng ký thành công mới vào được tức là phải là Admin || User
    Route::group(['middleware' => ['ckAdmin']], function () {
        // Đăng ký và thành công và phải là Admin mới vào được
        Route::get('admin', 'Admin\DashboardController@index');
        Route::resource('admin/category', 'Admin\CategoryController');
        // Route::get('admin/category', 'CategoryController@index');
        Route::resource('admin/new', 'Admin\TinController');
    });
});
