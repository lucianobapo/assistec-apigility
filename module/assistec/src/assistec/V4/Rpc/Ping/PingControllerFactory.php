<?php
namespace assistec\V4\Rpc\Ping;

class PingControllerFactory
{
    public function __invoke($controllers)
    {
        return new PingController();
    }
}
