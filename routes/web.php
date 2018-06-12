<?php

Route::get('/','EventsContoller@index' )->name('home');
Route::resource('events', 'EventsContoller');


