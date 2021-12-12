<?php

use Illuminate\Support\Facades\Route;

Route::namespace('website')->group(function () {
    Route::get('/', 'HomeController');
    Route::get('/p', 'CategoryController@index');
    Route::get('/p/{slug}', 'CategoryController@show');
    Route::get('/blog', 'BlogController');

    Route::get('/contato', 'ContactController@index');
    Route::post('/contato', 'ContactController@form');

    // Página estática (sem necessidade de controller)
    Route::view('/sobre', 'website.about.index');
});
