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

Route::get('/' , 'PagesController@index')->name('home');
Route::get('blog' , 'PagesController@blog')->name('blog');
Auth::routes();


Route::get('contact' , 'PagesController@getContact')->name('contact');
Route::post('contact' , 'PagesController@postContact')->name('contact');
Route::get('about' , 'PagesController@about')->name('about');



Route::get('single/{$id}' , 'PagesController@blogSingle')->name('single');

/*Route::post('add/comment' , [ 'as'=>'comment', 'uses'=>'BlogController@Comment']);*/

/*Route::get('comment/{post_id}' , [ 'as'=>'comment', 'uses'=>'PagesController@addComment']);*/



Route::get('tutorial', 'PagesController@video')->name('video');

Route::get('agent', 'PagesController@agent')->name('agent');


Route::get('post/{slug}', ['as' => 'blog.single' , 'uses'=>'BlogController@detail'])->where('slug', '[\w\d\-\_]+');

// Route::get('/page/{name}', 'PagesController@getPage');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
