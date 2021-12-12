<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Website')->group(function () {
    Route::get('/', 'HomeController');
    Route::get('/p', 'CategoryController@index');
    Route::get('/p/{slug}', 'CategoryController@show');
    Route::get('/blog', 'BlogController');

    Route::get('/contato', 'ContactController@index');
    Route::post('/contato', 'ContactController@form');

    // Página estática (sem necessidade de controller)
    Route::view('/sobre', 'Website.about.index');
});
