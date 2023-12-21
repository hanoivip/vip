<?php

namespace Hanoivip\Vip\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Exception;
use Hanoivip\Vip\Services\VipService;

class CacheRankList extends Command
{
    protected $signature = 'vip:cacheRankList';
    
    protected $description = 'Generate rank list & cache it';
    
    private $vip;
    
    public function __construct(VipService $vip)
    {
        parent::__construct();
        $this->vip = $vip;
    }
    
    public function handle()
    {
        try
        {
            $list = $this->vip->getVipPlayers();
            print_r($list);
            
            $this->info("ok");
        }
        catch (Exception $ex)
        {
            Log::error("Vip generate exception: " . $ex->getMessage());
            $this->error($ex->getMessage());
        }
    }
    
}