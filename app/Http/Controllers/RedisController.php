<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function testRedis()
    {
        //$redis = app()->make('redis');
        //$redis->set('pc_name', 'Md.Samiul haque');
         //return $redis->get('pc_name');
        //return Redis::get('user:profile:'.'1');
        return 'Redis not implemented';
    }// end -:- testRedis()
}// end -:- RedisController()
