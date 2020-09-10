<?php

namespace Hanoivip\Vip\ViewObjects;

class UserVipVO
{
    public $userId;
    /**
     * Current vip level
     * @var number
     */
    public $level;
    /**
     * Current vip point
     * @var number
     */
    public $point;
    /**
     * Next vip level's point
     * @var number
     */
    public $nextLevelPoint;
    /**
     * Current vip level's point
     * @var number
     */
    public $curLevelPoint;
    /**
     * 
     * @var float
     */
    public $percentage;
}