<?php

if (!Route::has('news.index')) {
    Route::get('news', ['uses' => 'Procivam\News\NewsController@index'])->name('news.index');
}
