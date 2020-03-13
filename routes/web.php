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
    return view('pages.index');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});



Route::resource('blog', 'BlogController');
Route::resource('bg', 'BgPicsController');
Route::resource('contact', 'ContactsController');
Route::resource('ebooks', 'EbooksController');
Route::resource('events', 'EventsController');
Route::resource('gallery', 'GalleryController');
Route::resource('sermons', 'SermonsController');
Route::resource('testimony', 'TestimoniesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
