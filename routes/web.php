<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function(){

	Route::get('/home', function(){
		return view('admin.home');
	})->name('admin.home');

	Route::get('users/', ['as' => 'admin.users', 'uses' => 'AdminController@all_users']);

});



Route::get('test', 'HomeController@index');
Route::get('users/{user_id}/roles/{role_name}', 'HomeController@attachUserRole');
Route::get('users/{user_id}/roles', 'HomeController@getUserRole');
Route::post('role/permission/add', 'HomeController@attachPermission');
Route::get('role/{role}/permissions', 'HomeController@getPermissions');
