<?php

Route::get('news', ['uses' => 'NewsController@index'])->name('news.index');