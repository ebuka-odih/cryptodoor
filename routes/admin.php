<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin', 'auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

    Route::resource('crypto-news', 'Admin\AdminCryptoNewsController');
    Route::resource('coin-picker', 'Admin\AdminCoinPickerController');
    Route::resource('news-update', 'Admin\AdminNewsUpdateController');
    Route::resource('learn-crypto', 'Admin\AdminLearnCryptoController');
    Route::resource('community', 'Admin\AdminCommunityController');
    Route::resource('crypto-event', 'Admin\AdminCryptoEventController');
    Route::resource('coming-soon', 'Admin\AdminComingSoonController');

});
