<?php
namespace assistec\V4\Rest\Cidades;

class CidadesResourceFactory
{
    public function __invoke($services)
    {
        return new CidadesResource();
    }
}
