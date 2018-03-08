<?php

use App\Post;
use App\User;
use App\Country;
use App\{Photo};

/*
|--------------------------------------------------------------------------
| Forms
|--------------------------------------------------------------------------
|
*/

Route::resource('/posts', 'PostsController');



/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/insert', function(){
//   DB::insert('insert into posts(title, content) values(?, ?)', ['Really awesome', 'Laravel is the super cool']);
// });

// Route::get('/read', function(){
//   $results = DB::select('select * from posts where id = ?', [1]);
//   return var_dump($results);
// });

// Route::get('/update', function(){
//   $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
// });

// Route::get('/delete', function(){
//   $deleted = DB::delete('delete from posts where id = ?', [1]);
//   return $deleted;
// });

/*
|--------------------------------------------------------------------------
| Eloquent relationships
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//One to One relationships
// Route::get('/user/{id}/post/', function($id){
//   $post = User::find($id)->post;
//   return $post;
// });

// Route::get('/post/{id}/user', function($id){
//   $user = Post::find($id)->user->password;
//   return $user;
// });

//One to many relationships
// Route::get('/posts', function(){
//   $user = User::find(1);
//   foreach ($user->posts as $post) {
//     echo $post->title . "<br>";
//   }
// });

//Many to Many
// Route::get('user/{id}/role', function($id){
//   $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//   return $user;
// });

//Access pivot table
// Route::get('user/pivot', function(){
//   $user = User::find(1);
//   foreach ($user->roles as $role) {
//     echo $role->pivot->role_id;
//   }
// });

// Route::get('user/{id}/country', function($id){
//   $country = Country::find($id);
//   foreach ($country->posts as $post) {
//     return $post->title;
//   }
// });

//Polymorphic relationships
Route::get('user/{id}', function($id){
  $user = User::find($id);
  foreach ($user->photos as $photo) {
    return $photo;
  }
});

// Route::get('post/{id}', function($id){
//   $user = Post::find($id);
//   foreach ($user->photos as $photo) {
//     echo $photo;
//   }
// });

Route::get('/photo/{id}/post', function($id){
  $photo = Photo::findOrFail($id);
  return $photo->imageable;
});

/*
|--------------------------------------------------------------------------
| ORM
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/read', function(){
//   $post = Post::find(1);
//   return $post->content;
// });

// Route::get('/find', function(){
//   $post = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//   return $post;
// });

// Route::get('/findmore', function(){
//   $post = Post::findOrFail(2);
//   return $post;
//
//   // $post = Post::where('user_count', '<', 50)->firstOrFail();
//
// });

// Route::get('/insert', function(){
//   $post = Post::find(2);
//   $post->title = "OK it is changed";
//   $post->content = "Let us see if it really works";
//   $post->save();
// });

// Route::get('/create', function(){
//   Post::create([
//     'title'=>'New post',
//     'content'=>'Alright, so far so good'
//   ]);
// });

// Route::get('/update', function(){
//   Post::where('id', 2)->where('is_admin', 0)->update([
//     'title'=>'NEW PHP TITLE',
//     'content'=>'I love my instructor'
//   ]);
// });

// Route::get('/delete', function(){
//   $post = Post::find(1)->delete();
// });

// Route::get('/delete', function(){
//   // $post = Post::destroy(2);
//   $post = Post::find(5)->delete();
// });

// Route::get('soft', function(){
//   // $post = Post::withTrashed()->where('id', 5)->get();
//   // return $post;
//   post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/force', function(){
//   Post::withTrashed()->where('is_admin', 0)->forceDelete();
// });



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

// Route::resource('posts', 'PostsController');
Route::get('contact', 'PostsController@contact');

// Route::get('post/{id}', 'PostsController@show_post');

// Route::get('/post/{id}', 'PostsController@index');

// Route::get('/about', function(){
//   return '<a href="'.route('admin.home').'">Yooo</a>';
// });
//
// Route::get('/contact', 'PostsController@contact');
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
