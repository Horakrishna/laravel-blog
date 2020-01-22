<?php


Route::get('/',[
    'uses' =>'FrontendController@index',
    'as'   =>'/'
]);

Route::get('/about',[
    'uses' =>'FrontendController@aboutView',
    'as'   =>'/about'
]);
Route::get('/service',[
    'uses' =>'FrontendController@serviceView',
    'as'   =>'/service'
]);

Route::get('/contact',[
    'uses' =>'FrontendController@contactView',
    'as'   =>'/contact'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add-category',[
    'uses' =>'CategoryController@addCategory',
    'as'   =>'add-category'
]);

Route::get('/category/manage-category',[
    'uses' =>'CategoryController@manageCategory',
    'as'   =>'manage-category'
]);
Route::post('/category/new-category',[
    'uses' =>'CategoryController@saveCategory',
    'as'   =>'new-category'
]);