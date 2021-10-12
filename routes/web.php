<?php

use App\Models\Post;
use App\Http\Controllers\PostController;

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
    return view('pages.home');
});

Route::get('/home-2', function () {
    return view('pages.home-2');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/service-details', function () {
    return view('pages.service-details');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/portfolio-details', function () {
    return view('pages.portfolio-details');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
