<?php

use App\Post;

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

Route::get('/create', function(){
  Post::create([
    'title'=>'php array',
    'content'=>'I am learning a lot'
  ]);
});

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

Route::get('/force', function(){
  Post::withTrashed()->where('is_admin', 0)->forceDelete();
});



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
