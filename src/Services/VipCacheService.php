<?php

namespace Hanoivip\Vip\Services;

use Illuminate\Support\Facades\Cache;

class VipCacheService
{
    const RANK_LIST_CACHE = 'RANK_LIST_CACHE';
    
    public function getDailyRankList()
    {
        $list = [];
        if (Cache::has(self::RANK_LIST_CACHE))
        {
            $list = Cache::get(self::RANK_LIST_CACHE);
        }
        if (Cache::has(self::RANK_LIST_CACHE . '_86400'))
        {
            $list = Cache::get(self::RANK_LIST_CACHE . '_86400');
        }
        return $list;
    }
    /**
     * 
     * @param string $key
     * @param object $value
     * @param number $expires Expires in seconds..
     */
    public function cacheData($key, $value, $expires = 0)
    {
        if ($expires > 0)
            Cache::put($key, $value, $expires);
        else
            Cache::forever($key, $value);
    }
}