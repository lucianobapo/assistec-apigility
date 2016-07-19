<?php
namespace assistecApi\V1\Rpc\Cidade;

class CidadeControllerFactory
{
    public function __invoke($controllers)
    {
        $services = $controllers->getServiceLocator();
        // Specify the correct service name for your user model here,
        // obviously.
        return new CidadeController($services->get('assistec-backend'));
    }
}
