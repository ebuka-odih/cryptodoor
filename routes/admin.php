<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin', 'auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('users', 'Admin\AdminController@users')->name('users');
    Route::get('paid/{id}', 'Admin\AdminController@paid')->name('paid');
    Route::get('add/user', 'Admin\AdminController@create')->name('add.user');
    Route::post('store/user', 'Admin\AdminController@store_user')->name('store_user');

    Route::resource('crypto-news', 'Admin\AdminCryptoNewsController');
    Route::resource('coin-picker', 'Admin\AdminCoinPickerController');
    Route::resource('news-update', 'Admin\AdminNewsUpdateController');
    Route::resource('learn-crypto', 'Admin\AdminLearnCryptoController');
    Route::resource('community', 'Admin\AdminCommunityController');
    Route::resource('crypto-event', 'Admin\AdminCryptoEventController');
    Route::resource('coming-soon', 'Admin\AdminComingSoonController');

});
