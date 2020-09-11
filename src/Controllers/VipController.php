<?php

namespace Hanoivip\Vip\Controllers;

use Hanoivip\Vip\Services\VipService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VipController extends Controller
{
    private $service;
    
    public function __construct(VipService $service)
    {
        $this->service = $service;
    }
    
    public function userInfo(Request $request)
    {
        $userId = Auth::user()->getAuthIdentifier();
        $info = $this->service->getInfo($userId);
        return view('hanoivip::vip-user-info', ['info' => $info]);
    }
    
    public function rank(Request $request)
    {
        $page = 0;
        $level = 1;
        if ($request->has('level'))
            $level = $request->input('level');
        if ($request->has('page'))
            $page = $request->input('page');
        $list = $this->service->getVipPlayers($level, $page);
        if ($request->ajax())
            return ['error' => 0, 'message' => '', 'data' => $list];
        else 
            return view('hanoivip::vip-list', ['list' => $list]);
    }
}
