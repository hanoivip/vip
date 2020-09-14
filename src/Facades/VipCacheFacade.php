<?php

namespace Hanoivip\Vip\Facades;

use Illuminate\Support\Facades\Facade;

class VipCacheFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vipCache';
    }
}
