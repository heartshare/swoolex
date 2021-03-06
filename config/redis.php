<?php
// +----------------------------------------------------------------------
// | Redis配置
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://blog.junphp.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小黄牛 <1731223728@qq.com>
// +----------------------------------------------------------------------

return [
    // 是否开启连接数监控
    'is_monitor' => true,

    // +----------------------------------------------------------------------
    // | WebSocket Redis连接配置
    // +----------------------------------------------------------------------

    // 是否开启redis
    'status' => true,
    // host
    'host' => '127.0.0.1',
    // 端口 
    'port' => '6379',
    // 密码 
    'pwd' => 'root',
    // 库前缀 
    'table' => 'user_',
    // 连接超时时间
    'timeout' => 1,
    // DBindex
    'dbindex' => 0,

    // +----------------------------------------------------------------------
    // | 连接池配置
    // +----------------------------------------------------------------------

    //最大连接数
    'pool_max' => 100,
];
