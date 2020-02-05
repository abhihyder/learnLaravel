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
// Route::get('/student','pageController@students');
//Route::get('/blog','postController@readPost')->name('blog');
Route::get('/contact','pageController@contact');

//      post crud -----------------------------
// Route::get('/createPost','postController@createPost')->name('createPost');
// Route::post('/publishPost','postController@publishPost')->name('publishPost');
// Route::get('/view_single_post_{id}','postController@singlePost');
// Route::get('/delete_post_{id}','postController@deletePost');
// Route::get('/edit_post_{id}','postController@editPost');
// Route::post('/updatePost{id}','postController@updatePost');
Route::resource('post', 'postController');

//      Categories CRUD-----------------------------------------
Route::get('/createCat','categoriesController@createCat')->name('createCat');
Route::post('/publishCat','categoriesController@publishCat')->name('publishCat');

//      Students CRUD-----------------------------------------
Route::get('/createStudent','studentController@createStudent')->name('createStudent');
Route::post('/publishStudent','studentController@publishStudent')->name('publishStudent');


//      Student CRUD-------------------
Route::resource('student', 'studentController');
