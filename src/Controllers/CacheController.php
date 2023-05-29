<?php

namespace Hanoivip\Vip\Controllers;

use Hanoivip\Vip\Services\VipCacheService;

/**
 * @deprecated
 * @author GameOH
 *
 */
class CacheController extends Controller
{
    private $cache;
    
    public function __construct(VipCacheService $cache)
    {
        $this->cache = $cache;
    }
    
    public function rank()
    {
        $list = $this->cache->getDailyRankList();
        return view('hanoivip::vip-list', ['list' => $list]);
    }
}