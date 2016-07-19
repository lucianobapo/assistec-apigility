<?php
namespace assistec\V3\Rest\Cidade;

class CidadeResourceFactory
{
    public function __invoke($services)
    {
        return new CidadeResource();
    }
}
