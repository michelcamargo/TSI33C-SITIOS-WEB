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

    Route::get('/produtos', 'ProductController@index')->name('www.produtos');
    Route::get('/produtos/{id}', 'ProductController@view')->name('www.produtos.view');
    Route::get('/produtos/{id}/edit', 'ProductController@editView')->name('www.produtos.editView');
    Route::get('/produtos/create', 'ProductController@createView')->name('www.produtos.createView');

    Route::post('/produtos/{id}/edit', 'ProductController@productEdit')->name('www.produtos.edit');
    Route::post('/produtos/create', 'ProductController@productCreate')->name('www.produtos.create');

    Route::post('/contato', 'ContactController@form')->name('www.contact.form');

});
