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
});
    

Route::middleware([
    'web',
    'admin'
])->namespace('Hanoivip\Vip\Controllers')
    ->prefix('ecmin')
    ->group(function () {});