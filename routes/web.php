<?php

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/', 'Home1Controller@index'); 

Route::get('/home', 'Home1Controller@index')->name('home');

Route::get('/about','AboutController@index');

Route::get('/article', 'Home1Controller@index');

Route::get('/article/{id}', 'ArticleController@index'); //menampilkan article per ID

Route::get('/resep', 'ResepController@komen');

Route::get('/home/cetak_pdf', 'ArticleController@cetak_pdf');

Route::get('/manage', 'ArticleController@manage')->name('manage'); //manage article

Route::get('/manage/add','ArticleController@add'); //add article

Route::post('/manage/create','ArticleController@create');

Route::get('/manage/edit/{id}','ArticleController@edit');

Route::post('/manage/update/{id}','ArticleController@update');

Route::get('/manage/delete/{id}','ArticleController@delete');

Route::get('/manage/cetak_pdf', 'ArticleController@cetak_pdf');

Route::get('/manageuser','UserController@manageuser'); //manage user

Route::get('/manageuser/cetak_pdf','UserController@cetak_pdf'); //cetak user

Route::get('/user', 'UserController@index');

Auth::routes();


//Route::get('/article/{id}', 'ArticleController@komen');

Route::get('/komen/{id}', 'KomenController@komen');

Route::get('/mKomen', 'KomenController@manage')->name('manage');

Route::get('/mKomen/add','KomenController@add');

Route::post('/mKomen/create','KomenController@create');

Route::get('/mKomen/edit/{id}','KomenController@edit');

Route::post('/mKomen/update/{id}','KomenController@update');

Route::get('/mKomen/delete/{id}','KomenController@delete');
