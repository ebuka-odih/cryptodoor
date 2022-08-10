<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin', 'auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

    Route::resource('crypto-news', 'Admin\AdminCryptoNewsController');
});
