<?php
// +----------------------------------------------------------------------
// | 监听WebSocket握手成功
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://blog.junphp.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 小黄牛 <1731223728@qq.com>
// +----------------------------------------------------------------------

namespace event;

class onOpen
{
    /**
	 * 启动实例
	*/
    public $server;

    /**
     * 统一回调入口
     * @todo 无
     * @author 小黄牛
     * @version v1.1.1 + 2020.07.08
     * @deprecated 暂不启用
     * @global 无
     * @param Swoole\WebSocket $server
     * @param Swoole\Http\Request $request HTTP请求对象
     * @return void
    */
    public function run($server, $request) {
        try {
            // 记录到请求容器
            \x\Container::getInstance()->set('websocket_frame', $request);
            \x\Container::getInstance()->set('websocket_server', $server);

            $this->server = $server;
            // 调用二次转发，不做重载
            $on = new \app\event\onOpen;
            $on->run($server, $request);
        } catch (\Throwable $throwable) {
            return \x\Error::run()->halt($throwable);
        }
    }
}

