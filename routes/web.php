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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/home');
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\PagesController::class, 'blog'])->name('blog');
Route::get('/property', [App\Http\Controllers\PagesController::class, 'properties'])->name('property');


Auth::routes(['verify' => true]);

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('admin', function () {
    return redirect('/dashboard');
});

Route::get('/{vue_capture?}', function () {
    return view('admin');
})->where('vue_capture', '[\/\w\.-]*')->middleware('auth');
