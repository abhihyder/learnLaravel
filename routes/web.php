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
    return view('pages.index'); // "/" means home URL. return view means we are in view folder. ('pages.index') means path of file which we wanna show. here pages is folder and index is file inside pages folder.
});

Route::get('/about','pageController@about'); // "/about" means "example.com/about". and "pageController@about" means pageController class and about is method of pageController class. And when someone will click to example.com/about path it will redirect to about method of pageController class.
Route::get('/services','pageController@services');
Route::get('/contact','pageController@contact');
