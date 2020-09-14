<?php

namespace Hanoivip\Vip\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Exception;
use Hanoivip\Vip\Services\VipService;
use Hanoivip\Vip\Services\VipCacheService;

class CacheRankList extends Command
{
    protected $signature = 'vip:cacheRankList';
    
    protected $description = 'Generate rank list & cache it';
    
    private $vip;
    
    private $cache;
    
    public function __construct(VipService $vip, VipCacheService $cache)
    {
        parent::__construct();
        $this->vip = $vip;
        $this->cache = $cache;
    }
    
    public function handle()
    {
        try
        {
            $list = $this->vip->getVipPlayers();
            print_r($list);
            $this->cache->cacheData(VipCacheService::RANK_LIST_CACHE, $list);
            $this->info("ok");
        }
        catch (Exception $ex)
        {
            Log::error("Vip generate exception: " . $ex->getMessage());
            $this->error($ex->getMessage());
        }
    }
    
}