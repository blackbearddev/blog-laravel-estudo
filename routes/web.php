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

//declarando middleware
use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');
});

Route::get("user/{id}", function($id){
    return 'User ' . $id;
});


Route::get('posts/{post}/comments/{coment}', function($postId, $comentId){
    return 'Post ' . $postId . 'E comentario: ' . $comentId;
});

//optional paramenters
Route::get('usuario/{name?}', function($name='John'){
    return $name;
});


Route::get("str/{name}", function($name){
    return $name;
})->where('name', '[A-Za-z]+');


Route::get("nmb/{id}", function($id){
    return $id;
})->where('id', '[0-9]+');


Route::get("strn/{id}/{name}", function($id, $name){
    return $name . " " . $id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::prefix('admin')->group(function(){
    Route::get('users', function(){
        return 'Admin! user';
    //})->middleware('checkage');
    })->middleware(CheckAge::class);
});


Route::resource('photos', 'PhotoController');

//speify multiple resource

// Route::resources([
//     'photos' => 'PhotoController',
//     'posts' => 'PostsCOntroller'
// ]);

Route::get("users", 'UserController@index');
Route::post("users/create", 'UserController@store');



//redirect
//Route::redirect("/user", '/u', 301);