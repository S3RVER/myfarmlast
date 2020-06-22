<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/','HomeController@index')->name('home');
Route::resource('/market-categories', 'MarketCategoryController');
