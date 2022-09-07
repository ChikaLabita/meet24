<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.index');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/blog-home', function () {
    return view('layouts.blog-home');
});

Route::get('/blog-post', function () {
    return view('layouts.blog-post');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::get('/faq', function () {
    return view('layouts.faq');
});

Route::get('/portfolio-item', function () {
    return view('layouts.portfolio-item');
});

Route::get('/portfolio-overview', function () {
    return view('layouts.portfolio-overview');
});

Route::get('/pricing', function () {
    return view('layouts.pricing');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
