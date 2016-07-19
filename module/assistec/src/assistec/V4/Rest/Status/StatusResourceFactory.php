<?php
namespace assistec\V4\Rest\Status;

class StatusResourceFactory
{
    public function __invoke($services)
    {
        return new StatusResource($services->get('StatusLib\Mapper'));
    }
}
