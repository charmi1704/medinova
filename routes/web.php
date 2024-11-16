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
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/appointment', function () {
    return view('website.appointment');
});
Route::get('/blog', function () {
    return view('website.blog');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/detail', function () {
    return view('website.detail');
});
Route::get('/price', function () {
    return view('website.price');
});
Route::get('/search', function () {
    return view('website.search');
});
Route::get('/service', function () {
    return view('website.service');
});
Route::get('/team', function () {
    return view('website.team');
});
Route::get('/testimonial', function () {
    return view('website.testimonial');
});
