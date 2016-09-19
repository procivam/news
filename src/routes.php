<?php

Route::get('news', ['uses' => 'Procivam\News\NewsController@index'])->name('news.index');