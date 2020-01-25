<?php

//Front Page Route Start
Route::get('/',[
    'uses' =>'FrontendController@index',
    'as'   =>'/'
]);
Route::get('/category-blog/{id}/{name}',[
    'uses' =>'FrontendController@categoryBlog',
    'as'   =>'category-blog'
]);
Route::get('/blog-details/{id}',[
    'uses' =>'FrontendController@blogDetails',
    'as'   =>'blog-details'
]);
Route::get('/sign-up',[
    'uses' =>'SignUpController@index',
    'as'   =>'sign-up'
]);

Route::post('/new-sign-up',[
    'uses' =>'SignUpController@index',
    'as'   =>'sign-up'
]);
Route::get('/service',[
    'uses' =>'FrontendController@serviceView',
    'as'   =>'/service'
]);

Route::get('/contact',[
    'uses' =>'FrontendController@contactView',
    'as'   =>'/contact'
]);

//Front Page Route End

//Admin Page Route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Page Route

//Category Page Route
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
Route::get('/category/unpublished/{id}',[
    'uses' =>'CategoryController@unpublishedCategory',
    'as'   =>'unpublished-category'
]);
Route::get('/category/published/{id}',[
    'uses' =>'CategoryController@publishedCategory',
    'as'   =>'published-category'
]);
Route::get('/category/edit/{id}',[
    'uses' =>'CategoryController@editCategory',
    'as'   =>'edit-category'
]);

Route::post('/category/update-category',[
    'uses' =>'CategoryController@updateCategory',
    'as'   =>'update-category'
]);
Route::post('/category/delete-category',[
    'uses' =>'CategoryController@deleteCategory',
    'as'   =>'delete-category'
]);

//Category  Route End

//Blog  Route start
Route::get('/blog/add-blog',[
    'uses' =>'BlogController@addBlog',
    'as'   =>'add-blog'
]);
Route::get('/blog/manage-blog',[
    'uses' =>'BlogController@manageBlog',
    'as'   =>'manage-blog'
]);
Route::post('/blog/new-blog',[
    'uses' =>'BlogController@saveBlog',
    'as'   =>'new-blog'
]);

Route::get('/blog/edit-blog/{id}',[
    'uses' =>'BlogController@editBlog',
    'as'   =>'edit-blog'
]);
Route::post('/blog/update-blog',[
    'uses' =>'BlogController@updateBlog',
    'as'   =>'update-blog'
]);
Route::post('/blog/delete-blog',[
    'uses' =>'BlogController@deleteBlog',
    'as'   =>'delete-blog'
]);