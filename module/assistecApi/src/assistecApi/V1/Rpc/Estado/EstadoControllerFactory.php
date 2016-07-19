<?php
namespace assistecApi\V1\Rpc\Estado;

class EstadoControllerFactory
{
    public function __invoke($controllers)
    {
        $services = $controllers->getServiceLocator();
        // Specify the correct service name for your user model here,
        // obviously.
        return new EstadoController($services->get('assistec-backend'));
    }
}
