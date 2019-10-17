<?php

namespace Hanoivip\Vip\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Exception;

class CheckByRecharge extends Command
{
    protected $signature = 'vip:fixByRecharge';
    
    protected $description = 'Init/fix VIP based on user recharges';
    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function handle()
    {
        try
        {
            $this->info("ok");
        }
        catch (Exception $ex)
        {
            Log::error("Vip init/check by user recharges exception: " . $ex->getMessage());
            $this->error($ex->getMessage());
        }
    }
    
}