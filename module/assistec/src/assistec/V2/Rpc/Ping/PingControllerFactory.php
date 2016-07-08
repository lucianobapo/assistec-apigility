<?php
namespace assistec\V2\Rpc\Ping;

class PingControllerFactory
{
    public function __invoke($controllers)
    {
        return new PingController();
    }
}
