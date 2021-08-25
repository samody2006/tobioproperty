<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', function () {
    return view('frontend.home');
});

Auth::routes();
Route::get('/register', function() {return redirect('/login');});
Route::post('/register', function() { return redirect('/login');});
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



//Frontend
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/property', [App\Http\Controllers\HomeController::class, 'properties'])->name('property');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

//Backend
//Blog
Route::get('dashboard/blog', [App\Http\Controllers\HomeController::class, 'showblog'])->name('showblog');
// Route::get('/blog/{article}/view','ArticleController@showBlogPost');
// Route::get('/blog/new','ArticleController@newBlogPost')->middleware('auth:admin');
// Route::post('/blog/new','ArticleController@addBlogPost')->middleware('auth:admin');
// Route::get('/blog/{article}/edit','ArticleController@showEditBlogPost')->middleware('auth:admin');
// Route::post('/blog/{article}/edit','ArticleController@editBlogPost')->middleware('auth:admin');
// Route::post('/blog/comment','CommentController@addComment');
// Route::get('/blog/comment/{comment}/delete','CommentController@deleteComment')->middleware('auth:admin');

//House
Route::get('dashboard/house', [App\Http\Controllers\Admin\ProductController::class, 'showhouse'])->name('showhouse');
Route::get('/add/house', [App\Http\Controllers\Admin\ProductController::class, 'addhouse'])->name('addhouse');
Route::post('/add/house', [App\Http\Controllers\Admin\ProductController::class, 'addhouse'])->name('addhouse');
Route::get('/addHouseform', [App\Http\Controllers\Admin\ProductController::class, 'addHouseform'])->name('addHouseform');


//Land 
Route::get('dashboard/land', [App\Http\Controllers\Admin\ProductController::class, 'showland'])->name('showland');