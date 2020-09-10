<?php

namespace Hanoivip\Vip\Facades;

use Illuminate\Support\Facades\Facade;

class VipFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vip';
    }
}
