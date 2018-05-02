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


// routes of UserController
Route::post('/user/{id}', 'UserController@show');
Route::patch('/user/{id}', 'UserController@update');
Route::get('/profile', 'UserController@profile');
Route::post('/change_avatar', 'UserController@changeAvatar');
Route::post('/password', 'UserController@changePassword');

Route::group(['middleware' => ['permission:access to list users']], function () {
    Route::get('/allUser/{role}', 'UserController@allUsers');
});

Route::group(['middleware' => ['permission:delete user']], function () {
    Route::post('/deleteUser/{id}', 'UserController@destroy');
    Route::post('/activateUser/{id}', 'UserController@activate');
});

Route::group(['middleware' => ['permission:add user']], function () {
    Route::get('/addUser', 'UserController@addUser');
    Route::post('/addUser', 'UserController@store');
});

Route::post('/editUser/{id}', 'UserController@update');

