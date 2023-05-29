<?php

namespace Hanoivip\Vip;

use Hanoivip\Vip\Services\VipCacheService;
use Hanoivip\Vip\Services\VipService;
use Illuminate\Support\ServiceProvider;

class ModServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/hanoivip'),
            __DIR__.'/Langs' => resource_path('lang/vendor/hanoivip'),
            __DIR__.'/../resources/images' => public_path('images'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../views', 'hanoivip');
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/Routes/api.php');
        $this->loadTranslationsFrom( __DIR__.'/Langs', 'hanoivip.vip');
        $this->mergeConfigFrom( __DIR__.'/../config/vip.php', 'vip');
    }

    public function register()
    {
        $this->app->bind('vip', VipService::class);
        //$this->app->bind('vipCache', VipCacheService::class);
    }
}
