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
Route::group(['middleware' => ['permission:manage products']], function () {
    Route::resource('product', 'ProductController');
    Route::get('product/more/{product_id}', 'ProductController@more');
    Route::patch('product/fields/{product_id}', 'ProductController@updateFields');
});

// routes of CategorieController
Route::group(['middleware' => ['permission:manage categories']], function () {
    Route::resource('categorie', 'CategorieController');
    Route::resource('categorie/field', 'FieldController');
    Route::get('categorie/more/{categorie_id}', 'CategorieController@more');
});

// routes of RoleController

Route::resource('role', 'RoleController');

// routes of PageController
Route::get('/', 'PageController@home');
Route::resource('page', 'PageController');
Route::get('/page/{id}/{title}', 'PageController@getPage');
Route::get('/products/', 'PageController@getProducts');


// routes of PermissionController
Route::group(['middleware' => ['permission:modify user permissions']], function () {
    Route::get('permissions/', 'PermissionController@index');
    Route::get('permissionsOf/{role}', 'PermissionController@permissionsOf');
    Route::post('updatePermissionsOf/{role}', 'PermissionController@updatePermissionsOf');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
