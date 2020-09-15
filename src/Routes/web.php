<?php
use Illuminate\Support\Facades\Route;

Route::middleware([
    'web',
    'auth:web'
])->namespace('Hanoivip\Vip\Controllers')
    ->prefix('vip')
    ->group(function () {
    // define home
    Route::get('/user', 'VipController@userInfo')->name('vip');
});
    
Route::middleware([
    'web'
])->namespace('Hanoivip\Vip\Controllers')
->prefix('vip')
->group(function () {
    Route::get('/rank', 'CacheController@rank')->name('vip.rank');
});
    

Route::middleware([
    'web',
    'admin'
])->namespace('Hanoivip\Vip\Controllers')
    ->prefix('ecmin')
    ->group(function () {});