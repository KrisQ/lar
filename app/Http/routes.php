<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('posts', 'PostsController');
//Route::get('contact', 'PostsController@contact');

Route::get('post/{id}', 'PostsController@show_post');

// Route::get('/post/{id}', 'PostsController@index');

// Route::get('/about', function(){
//   return '<a href="'.route('admin.home').'">Yooo</a>';
// });
//
Route::get('/contact', 'PostsController@contact');
//
// Route::get('/post/{id}/{name}', function($id, $name){
//   return "<h1>Post #$id</h1> $name";
// });
//
// Route::get('admin/posts/example', array(
//   'as'=>'admin.home' ,
//    function(){
//      $url = route('admin.home');
//      return "this url is $url";
// }));
