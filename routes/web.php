<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;


Route::resource(name: 'photos', controller: PhotoController::class)->only(methods: [
    'index', 'show'
]);

Route::resource(name: 'photos', controller: PhotoController::class)->except(methods: [
    'create', 'store', 'update', 'destroy'
]);

// practicum 1

//Route::get('/', function () {
   // return view('Welcome');});

Route::get('/hello', [WelcomeController::class,'hello']);


Route::get('/world', function (){
    return 'World';
});

Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);


//practicum 2

//Route::get('/user/{name}', function ($name){
    //return 'Nama saya ' .$name;});

Route::get('/post/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke- ' .$postId. "Komentar ke-:" .$commentId;
});

Route::get('/articles/{id}', [PageController::class,'articles']);

//practicum 3
Route::get('/user/{name?}', function ($name='Aqilla Aprily'){
    return 'Nama saya ' .$name;
});

Route::get('/user/{name?}', function ($name='John'){
 return 'Nama saya ' .$name;
});


//practicum 4

Route::get('/user/profile', function (){
    //
  })->name('profile');
  

  //practicum 8
  //Route::get('/greeting', function () {
    //return view('hello', ['name' => 'Aqilla Aprily']);
//});

Route::get('/greeting', [WelcomeController::class, 'greeting']);
