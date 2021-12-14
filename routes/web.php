<?php

use Illuminate\Support\Facades\Route;

Route::namespace('website')->group(function () {
    Route::get('/', 'HomeController')->name('www.home');
    Route::get('/p', 'CategoryController@index')->name('www.products');
    Route::get('/p/{slug}', 'CategoryController@show')->name('www.products.category');
    Route::get('/blog', 'BlogController')->name('www.blog');

    // Página estática (sem necessidade de controller)
    Route::view('/sobre', 'website.about.index')->name('www.about');

    Route::get('/contato', 'ContactController@index')->name('www.contact');
    Route::post('/contato', 'ContactController@form')->name('www.contact.form');

});
