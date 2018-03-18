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

Route::get('/blog', 'PostsController@index');

Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function(){
    Route::get('/admin','Admin\DashboardController@index');

    //    User Routes
    Route::get('/admin/user','Admin\UserController@index');
    Route::get('/admin/user/new','Admin\UserController@new');
    Route::post('/admin/user/add','Admin\UserController@store');
    Route::get('/admin/user/view/{userid}','Admin\UserController@view');
    Route::post('/admin/user/update','Admin\UserController@update');
    Route::get('/admin/user/drop/{id}','Admin\UserController@drop');

    //    Post Routes
    Route::get('/admin/posts','Admin\PostController@index');
});
