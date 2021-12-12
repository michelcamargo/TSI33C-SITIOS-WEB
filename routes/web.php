<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Website')->group(function () {
    Route::get('/', 'HomeController');
});
