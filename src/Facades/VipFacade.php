<?php

namespace Hanoivip\Vip\Facades;

use Illuminate\Support\Facades\Facade;

class VipFacade extends Facade
{
    /**
     * Need documents?
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vip';
    }
}
