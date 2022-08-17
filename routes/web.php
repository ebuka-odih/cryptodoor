<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages.index4')->name('index');
Route::view('quiz', 'pages.quiz')->name('quiz');

Auth::routes();
include 'admin.php';

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

    Route::get('crypto/news', "CryptoNewsController@news")->name('news');
    Route::get('crypto/news/details/{id}', "CryptoNewsController@show")->name('news.show');

    Route::get('news/update', "NewsUpdateController@news")->name('news.update');
    Route::get('news/update/details/{id}', "NewsUpdateController@show")->name('newsupdate.show');

    Route::get('learn/crypto', "LearnCryptoController@news")->name('learn.crypto');
    Route::get('learn/crypto/details/{id}', "LearnCryptoController@show")->name('learn.show');

    Route::get('crypto/event', "CryptoEventController@news")->name('crypto.event');
    Route::get('crypto/events/details/{id}', "CryptoEventController@show")->name('cryptoevent.show');

    Route::get('coin/picked', "CoinPickerController@coins")->name('coins');

    Route::get('membership/plans', "PaymentController@membershipPlan")->name('membershipPlan');
    Route::post('membership/payment', "PaymentController@payment")->name('payment');
});
