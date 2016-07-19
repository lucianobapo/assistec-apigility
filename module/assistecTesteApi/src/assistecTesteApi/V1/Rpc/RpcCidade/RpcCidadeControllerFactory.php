<?php
namespace assistecTesteApi\V1\Rpc\RpcCidade;

class RpcCidadeControllerFactory
{
    public function __invoke($controllers)
    {
        $services = $controllers->getServiceLocator();
        // Specify the correct service name for your user model here,
        // obviously.
        return new RpcCidadeController($services->get('assistec-backend'));
    }
}
