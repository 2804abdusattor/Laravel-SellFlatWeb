<?php


// Route::get('/', 'App\Http\Controllers\ImageMultipleController@index');
// Route::post('upload_data', 'App\Http\Controllers\ImageMultipleController@store');

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all',
    'App\Http\Controllers\ConController@allData'
)->name('contact-data');
Route::get('/apartment/all',
    'App\Http\Controllers\ApartController@allData'
)->name('apart-data');

Route::get(
    '/contact/all/{id}',
    'App\Http\Controllers\ConController@showOneMessage'
)->name('contact-data-one');
Route::get(
    '/apartment/all/{id}',
    'App\Http\Controllers\ApartController@showOneMessage'
)->name('apart-data-one');

Route::get(
    '/contact/all/{id}/update',
    'App\Http\Controllers\ConController@updateMessage'
)->name('contact-update');
Route::get(
    '/apartment/all/{id}/update',
    'App\Http\Controllers\ApartController@updateMessage'
)->name('apart-update');

Route::post(
    '/contact/all/{id}/update',
    'App\Http\Controllers\ConController@updateMessageSubmit'
)->name('contact-update-submit');
Route::post(
    '/apartment/all/{id}/update',
    'App\Http\Controllers\ApartController@updateMessageSubmit'
)->name('apart-update-submit');

Route::get(
    '/contact/all/{id}/delete',
    'App\Http\Controllers\ConController@deleteMessage'
)->name('contact-delete');
Route::get(
    '/apartment/all/{id}/delete',
    'App\Http\Controllers\ApartController@deleteMessage'
)->name('apart-delete');

Route::post('/contact/submit',
    'App\Http\Controllers\ConController@submit'
)->name('contact-form');


Route::get('/apartment', function () {
    return view('apartment');
})->name('apartment');

Route::post('/apartment/submit', 'App\Http\Controllers\ApartController@submit'
)->name('apartment-form');

