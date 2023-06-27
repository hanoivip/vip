<?php

// Public APIs
use Illuminate\Support\Facades\Route;

Route::middleware('cache:86400')->prefix('api')->namespace('Hanoivip\Vip\Controllers')
->group(function () {
    Route::any('/vip/rank', 'VipController@rank');
});