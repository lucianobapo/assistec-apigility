<?php
namespace assistec\V4\Rest\Cidade;

class CidadeResourceFactory
{
    public function __invoke($services)
    {
        return new CidadeResource();
    }
}
