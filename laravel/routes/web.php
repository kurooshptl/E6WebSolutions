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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/service', function () {
    return view('services');
})->name('service');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/quote', function () {
    return view('quote');
})->name('quote');

Route::post('/contact', 'ContactUsFormController@store')->name('contact.store');
