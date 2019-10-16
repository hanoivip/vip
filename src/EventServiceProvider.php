<?php

namespace Hanoivip\Vip;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Hanoivip\Events\Gate\UserTopup' => [
            'Hanoivip\Vip\Services\VipService'
        ],
    ];
    
    public function boot()
    {
        parent::boot();
    }
}