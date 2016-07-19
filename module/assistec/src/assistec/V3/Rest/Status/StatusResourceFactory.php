<?php
namespace assistec\V3\Rest\Status;

class StatusResourceFactory
{
    public function __invoke($services)
    {
        return new StatusResource($services->get('StatusLib\Mapper'));
    }
}
