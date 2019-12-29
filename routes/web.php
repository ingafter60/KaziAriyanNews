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
# Frontend routes
Route::get('/', 'HomePageController@index');
Route::get('/listing', 'ListingPageController@index');
Route::get('/details', 'DetailsPageController@index');

# Backend routes
Route::group(['prefix'=> 'admin'], function(){
	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/category', 'Admin\CategoryController@index');
});

// Route::get('/helloworld', function () {
//     return ('Hello world!');
// });

// // http://localhost:81/KaziAriyanNews/user/777
// // Your id is 777 and your name is ING
// Route::get('/user/{id}/{name?}', function ($id, $name="ING") {
//     return 'Your id is ' . $id . " and your name is " .$name;
// })->where('id', '[0-9]+');

// Route::get('/hello', 'HelloController@hello');
// Route::get('/add', 'CrudController@index');

// Route::view('/aboutus', 'about');
// Route::view('/contactus', 'contact');

// Route::get('/about', ['uses' => 'AboutController@about', 'as' => 'about']);
