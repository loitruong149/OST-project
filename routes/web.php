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
//trang chu
Route::get('/', 'JobController@index')->name('homepage');


//link den cac trang tim viec, tim ky su(chua viet controller)
Route::get('/find', function () {return view('find');});
// Route::post('/find', 'JobController@index');

Route::get('/find_job/find', 'JobController@index_find');

Route::get('/find_engineer/find', function () {return view('find_engineer/find');});

//chi tiet trang tim viec(chua co db, dang de link tam thoi)
// Route::get('/find_job/list_job', function () {return view('find_job/list_job');});
Route::get('/find_job/list_job/{id}', 'JobController@index_list_job');

// Route::get('/find_job/job_content', function () {return view('find_job/job_content');});
Route::get('/find_job/job_content/{id}', 'JobController@index_content');

//xu ly apply job(chua viet controller, tam thoi cho route la register)



//Dang nhap bang facebook
Route::get('/login-facebook', 'SocialLoginController@redirectToFacebook')->name('loginFacebook');
Route::get('/facebookcallback', 'SocialLoginController@loginByFacebook');
//Dang nhap bang google
Route::get('/login-google', 'SocialLoginController@redirectToGoogle')->name('loginGoogle');
Route::get('/googlecallback', 'SocialLoginController@loginByGoogle');

Auth::routes();
Route::post('/apply', 'JobController@apply')->name('apply')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function(){

    return view('admin.index');
});
Route::resource('/admin/users', 'AdminUsersController');
Route::resource('/admin/posts', 'AdminPostsController');