<?php
use Illuminate\Support\Facades\Route;

Route::middleware([
    'web',
    'auth:web'
])->namespace('Hanoivip\Vip\Controllers')
    ->prefix('vip')
    ->group(function () {
    // define home
    Route::get('/', function () {
        return response()->redirectToRoute('vip.user');
    })->name('vip');
    // use cases
    Route::get('/user', 'VipController@userInfo')->name('vip.user');
    Route::get('/rank', 'VipController@rank')->name('vip.rank');
});

Route::middleware([
    'web',
    'admin'
])->namespace('Hanoivip\Vip\Controllers')
    ->prefix('ecmin')
    ->group(function () {});