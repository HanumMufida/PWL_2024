<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});

//Route::get('/hello', function () {
//    return 'Hello World';
//});

Route::get('/world', function () {
    return 'World';
   });

Route::get('/', function () {
    return 'SELAMAT DATANF';
   });

// Route::get('/about', function () {
//     return 'Hanum Mufida A (2241760042)';
//    });

Route::get('/user/{hanum}', function ($hanum) {
    return 'Nama SAYA '.$hanum;
    });

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

// Route::get('/articles/{id}', function 
//     ($postId) {
//      return 'Halaman artikel dengan ID-'.$postId;
//     });

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
    });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Andi']);
    });

Route::get('/greeting', [WelcomeController::class, 
    'greeting']);
        