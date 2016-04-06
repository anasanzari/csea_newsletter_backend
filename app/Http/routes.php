<?php

Route::get('/', 'WelcomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('dashboard','Dashboard\DashboardController@main');
Route::get('dashboard/add','Dashboard\DashboardController@add');
Route::get('dashboard/editions','ArticlesController@listAll');
Route::get('dashboard/editions/create','ArticlesController@createEdition');
Route::post('dashboard/editions/create','ArticlesController@saveEdition');
Route::get('dashboard/editions/{id}','ArticlesController@ListArticles');
Route::get('dashboard/editions/{id}/create','ArticlesController@createArticle');
Route::post('dashboard/editions/{id}/create','ArticlesController@newArticle');

Route::get('dashboard/editions/{id}/preview','ArticlesController@preview');

Route::get('dashboard/articles/{id}','ArticlesController@showArticle');
Route::get('dashboard/articles/{id}/edit','ArticlesController@editArticle');
Route::post('dashboard/articles/{id}/save','ArticlesController@saveArticle');

Route::get('api/articles/{id}','ArticlesController@getArticle');


Route::get('dashboard/photos','PhotosController@all');
Route::get('dashboard/photos/upload','PhotosController@upload');
Route::post('dashboard/photos/upload','PhotosController@newupload');
Route::get('dashboard/photos/{id}','PhotosController@show');
Route::get('dashboard/photos/{id}/edit','PhotosController@edit');
Route::post('dashboard/photos/{id}/edit','PhotosController@confirm_edit');
Route::get('dashboard/photos/{id}/delete','PhotosController@delete');

Route::get('dashboard/password','Auth\PasswordController@reset');
Route::post('dashboard/password','Auth\PasswordController@change');

/*public routes

Route::get('articles/{id}', 'ArticlesController@show');

Route::get('photoclix','PhotosController@index');
Route::get('interviews','InterviewController@index');
Route::get('interviews/{id}','InterviewController@show');

Route::get('himy','HimyController@index');
Route::get('himy/stories','HimyController@listAll');
Route::get('himy/login','HimyController@login');
Route::get('himy/create','HimyController@create');
Route::post('himy/create','HimyController@save');
Route::get('himy/story/img/{id}','HimyController@img');
Route::get('himy/story/{id}','HimyController@view');*/


/* Administrator routes-- needs authentication
Route::get('dashboard','Dashboard\DashboardController@main');
Route::get('dashboard/feedback','Dashboard\DashboardController@feeds');




Route::get('dashboard/articles/{id}','ArticlesController@get');
Route::get('dashboard/articles/{id}/edit','ArticlesController@edit');
Route::get('dashboard/articles/{id}/delete','ArticlesController@delete');
Route::post('dashboard/articles/{id}','ArticlesController@save');
Route::get('dashboard/articleedition/{year}/{month}','ArticlesController@listEdition');

Route::get('dashboard/photoclix','PhotosController@all');
Route::get('dashboard/photoclix/upload','PhotosController@upload');
Route::post('dashboard/photoclix/upload','PhotosController@newupload');
Route::get('dashboard/photoclix/{id}','PhotosController@show');
Route::get('dashboard/photoclix/{id}/edit','PhotosController@edit');
Route::post('dashboard/photoclix/{id}/edit','PhotosController@confirm_edit');
Route::get('dashboard/photoclix/{id}/delete','PhotosController@delete');


Route::get('dashboard/interviews','InterviewController@all');
Route::get('dashboard/interviews/create','InterviewController@create');
Route::post('dashboard/interviews/create','InterviewController@add'); //REST
Route::get('dashboard/interviews/{id}','InterviewController@view');
Route::get('dashboard/interviews/rest/{id}','InterviewController@get'); //REST
Route::get('dashboard/interviews/{id}/edit','InterviewController@edit');
Route::post('dashboard/interviews/{id}/edit','InterviewController@save');
Route::get('dashboard/interviews/{id}/delete','InterviewController@delete');

Route::get('dashboard/himy','HimyController@all');
Route::get('dashboard/himy/{id}','HimyController@show');
Route::get('dashboard/himy/{id}/delete','HimyController@delete');

/* facebook auth
Route::get('himy/fblogin', 'HimyController@redirectToProvider');
Route::get('himy/fblogin/callback', 'HimyController@handleProviderCallback');
Route::get('himy/fblogout', 'HimyController@logout');*/
