<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ContactsController@index')->name('contact');

Route::post('/confirm', 'ContactsController@confirm')->name('confirm');

Route::post('/process', 'ContactsController@process')->name('process');

Route::get('/complete', 'ContactsController@complete')->name('complete');
