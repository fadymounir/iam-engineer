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

Route::get('/','newsController@index_website');




Auth::routes();



Route::group(['middleware' => 'auth'], function () {
		Route::get('/home', 'HomeController@index')->name('home');
		
		Route::get('/Dashboard/homeMangement','DashboardController@homeMangement');
		
		Route::get('/Dashboard/headerFooter','DashboardController@headerFooter');
		
		Route::post('/headerFooter','DashboardController@headerFooterUpdate');
		Route::get('/Dashboard/NewsMangement','DashboardController@newMangement');
		Route::get('/deletePost/{id}','DashboardController@deletePost');
		Route::get('/editPost/{id}','DashboardController@editPost');
		Route::post('/updatePost/{id}','DashboardController@updatePost');
		Route::get('/Dashboard/NewsMangement/add','DashboardController@add_new');
		Route::post('/insert_post','DashboardController@insert');

		Route::get('/caseStudeis','DashboardController@case_studeis');

		Route::get('/editCase/{id}','DashboardController@editCase');
		Route::post('/updateCase/{id}','DashboardController@updateCase');
		Route::get('/addCase','DashboardController@addCase');
		Route::post('/insertCase','DashboardController@insertCase');
		Route::get('/DeleteCase/{id}','DashboardController@DeleteCase');

		Route::get('/aboutUsMangements','DashboardController@aboutUsMangements');
		Route::post('/updateAboutUs','DashboardController@updateAboutUs');

		Route::get('/contactUsMangement','DashboardController@ContactUa');
		Route::post('/updateContactUS','DashboardController@updateContactUS');

		Route::get('/ContactMessage','DashboardController@ContactMessage');
		Route::get('/DeleteMessage/{id}','DashboardController@DeleteMessage');


});



Route::get('/news','newsController@index');
Route::post('/search_News','newsController@search_News');
Route::get('/terms','newsController@terms');
Route::get('/case_studeis','newsController@case_studeis');
Route::get('/aboutUs','newsController@aboutUs');
Route::get('/contactUs','newsController@contactUs');
Route::post('/send_message','newsController@send_message');
