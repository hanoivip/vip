<?php

namespace Hanoivip\Vip\Services;

use Hanoivip\Events\Gate\UserTopup;
use Hanoivip\Vip\Models\UserVip;
use Hanoivip\Vip\ViewObjects\UserVipVO;
use Illuminate\Support\Facades\Log;

class VipService
{
    private function getRecord($uid)
    {
        $record = UserVip::where('user_id', $uid)->get();
        if ($record->isEmpty())
        {
            $record = new UserVip();
            $record->point = 0;
            $record->level = 0;
            $record->user_id = $uid;
            $record->save();
        }
        else
        {
            $record = $record->first();
        }
        return $record;
    }
    /**
     * 
     * @param number $uid
     * @return UserVipVO
     */
    public function getInfo($uid)
    {
        $record = $this->getRecord($uid);
        $obj = new UserVipVO();
        $obj->level = $record->level;
        $obj->point = $record->point;
        $nextLevel = $this->getNextLevel($obj->level);
        $VipD = config('vip.levels');
        $obj->nextLevelPoint = $VipD[$nextLevel];
        $obj->curLevelPoint = $VipD[$obj->level];
        $obj->percentage = ($obj->point - $obj->curLevelPoint) * 100.0 / ($obj->nextLevelPoint - $obj->curLevelPoint);
        return $obj;
    }
    
    public function getNextLevel($level)
    {
        $VipD = config('vip.levels');
        $nextLevel = $level + 1;
        if (isset($VipD[$nextLevel]))
        {
            return $nextLevel;
        }
        else
        {
            return max(array_keys($VipD));
        }
    }
    
    public function calculateLevel($point)
    {
        $VipD = config('vip.levels');
        ksort($VipD);
        foreach ($VipD as $level => $lvPoint)
        {
            if ($point < $lvPoint)
                return max(0, $level - 1);
            if ($point == $lvPoint)
                return $level;
        }
        // max
        return $level;
    }
    
    private function convert2Point($coin)
    {
        return intval($coin / 1000);
    }
    
    public function handle(UserTopup $event)
    {
        Log::debug("Vip user has topup..");
        $record = $this->getRecord($event->uid);
        $point = $this->convert2Point($event->coin);
        $nextLevel = $this->getNextLevel($record->level);
        $newPoint = $record->point + $point;
        $VipD = config('vip.levels');
        if ($newPoint >= $VipD[$nextLevel])
        {
            $record->level = $nextLevel;
        }
        $record->point = $newPoint;
        $record->save();
    }
    
    public function check($uid, $total)
    {
        $record = $this->getRecord($uid);
        $point = $this->convert2Point($total);
        $level = $this->calculateLevel($point);
        if ($record->level != $level)
        {
            $record->level = $level;
            $record->point = $point;
            $record->save();
            return true;
        }
    }
}