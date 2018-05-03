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

// routes of ProductController

Route::resource('product','ProductController');

// routes of CategorieController

Route::resource('categorie','CategorieController');
// routes of RoleController

Route::resource('role','RoleController');

// routes of PageController
Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/products', 'PageController@products');
Route::get('/quality', 'PageController@quality');
Route::get('/numbers', 'PageController@numbers');
Route::get('/environment', 'PageController@environment');


// routes of PermissionController
Route::get('permissions/', 'PermissionController@index');
Route::get('permissionsOf/{role}', 'PermissionController@permissionsOf');
Route::post('updatePermissionsOf/{role}', 'PermissionController@updatePermissionsOf');



