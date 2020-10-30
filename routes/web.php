<?php

// クライアントのホームページ
Route::get('/', 'JobController@index')->name('homepage');

// Find job and find engineer ページ
Route::get('/find', 'JobController@index_find');

// Find job ページ
Route::get('/find_job/find', 'JobController@index_find_job');

// Find engineer ページ
Route::get('/find_engineer/find', 'JobController@index_find_engineer');

//職種仕事ページ
Route::get('/find_job/list_job/{id}', 'JobController@index_list_job');

// 仕事内容ページ
Route::get('/find_job/job_content/{id}', 'JobController@index_content');

//Facebookでログイン画面
Route::get('/login-facebook', 'SocialLoginController@redirectToFacebook')->name('loginFacebook');
Route::get('/facebookcallback', 'SocialLoginController@loginByFacebook');

//Googleでログイン画面
Route::get('/login-google', 'SocialLoginController@redirectToGoogle')->name('loginGoogle');
Route::get('/googlecallback', 'SocialLoginController@loginByGoogle');

Auth::routes();
// 仕事をApply処理
Route::post('/apply', 'JobController@apply')->name('apply')->middleware('auth');

// Userマネージャー画面
Route::get('/home', 'HomeController@index')->name('home');

