<?php

Route::group(['namespace'=> 'App\Http\Controllers'], function(){
    Route::get('news', ['uses' => 'NewsController@index'])->name('news.index');
});
