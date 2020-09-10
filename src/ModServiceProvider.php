<?php

namespace Hanoivip\Vip;

use Hanoivip\Vip\Services\VipService;
use Illuminate\Support\ServiceProvider;

class ModServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/hanoivip'),
            __DIR__.'/Langs' => resource_path('lang/vendor/hanoivip'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');
        $this->loadViewsFrom(__DIR__ . '../views', 'hanoivip');
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/Routes/api.php');
        $this->loadTranslationsFrom( __DIR__.'/Langs', 'hanoivip');
        $this->mergeConfigFrom( __DIR__.'/../config/vip.php', 'vip');
    }

    public function register()
    {
        $this->app->bind('vip', VipService::class);
    }
}
