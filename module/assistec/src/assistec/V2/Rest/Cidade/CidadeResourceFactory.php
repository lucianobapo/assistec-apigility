<?php
namespace assistec\V2\Rest\Cidade;

class CidadeResourceFactory
{
    public function __invoke($services)
    {
        return new CidadeResource();
    }
}
