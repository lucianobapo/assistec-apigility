<?php
return array(
    'controllers' => array(
        'factories' => array(
            'assistecTesteApi\\V1\\Rpc\\RpcCidade\\Controller' => 'assistecTesteApi\\V1\\Rpc\\RpcCidade\\RpcCidadeControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'assistec-teste-api.rpc.rpc-cidade' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/rpc-cidade',
                    'defaults' => array(
                        'controller' => 'assistecTesteApi\\V1\\Rpc\\RpcCidade\\Controller',
                        'action' => 'rpcCidade',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'assistec-teste-api.rpc.rpc-cidade',
        ),
    ),
    'zf-rpc' => array(
        'assistecTesteApi\\V1\\Rpc\\RpcCidade\\Controller' => array(
            'service_name' => 'rpcCidade',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'assistec-teste-api.rpc.rpc-cidade',
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'rpcCidade' => array(
                'route_name' => 'assistec-teste-api.rpc.rpc-cidade',
                'entity_identifier_name' => 'cidade',
                'route_identifier_name' => 'id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'assistecTesteApi\\V1\\Rpc\\RpcCidade\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'assistecTesteApi\\V1\\Rpc\\RpcCidade\\Controller' => array(
                0 => 'application/vnd.assistec-teste-api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'assistecTesteApi\\V1\\Rpc\\RpcCidade\\Controller' => array(
                0 => 'application/vnd.assistec-teste-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
);
