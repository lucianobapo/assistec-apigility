<?php
return array(
    'router' => array(
        'routes' => array(
            'assistec.rest.servico' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/servico[/:servico_id]',
                    'defaults' => array(
                        'controller' => 'assistec\\V1\\Rest\\Servico\\Controller',
                    ),
                ),
            ),
            'assistec.rpc.ping' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ping',
                    'defaults' => array(
                        'controller' => 'assistec\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ),
                ),
            ),
            'assistec.rest.status' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/status[/:status_id]',
                    'defaults' => array(
                        'controller' => 'assistec\\V1\\Rest\\Status\\Controller',
                    ),
                ),
            ),
            'assistec.rest.estado' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/estado[/:estado_id]',
                    'defaults' => array(
                        'controller' => 'assistec\\V2\\Rest\\Estado\\Controller',
                    ),
                ),
            ),
            'assistec.rest.fabricante' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/fabricante[/:fabricante_id]',
                    'defaults' => array(
                        'controller' => 'assistec\\V2\\Rest\\Fabricante\\Controller',
                    ),
                ),
            ),
            'assistec.rest.cidades' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/cidades[/:cidades_id]',
                    'defaults' => array(
                        'controller' => 'assistec\\V4\\Rest\\Cidades\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'assistec.rest.servico',
            2 => 'assistec.rpc.ping',
            3 => 'assistec.rest.status',
            4 => 'assistec.rest.estado',
            5 => 'assistec.rest.fabricante',
            6 => 'assistec.rest.cidades',
        ),
        'default_version' => 4,
    ),
    'zf-rest' => array(
        'assistec\\V1\\Rest\\Servico\\Controller' => array(
            'listener' => 'assistec\\V1\\Rest\\Servico\\ServicoResource',
            'route_name' => 'assistec.rest.servico',
            'route_identifier_name' => 'servico_id',
            'collection_name' => 'servico',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
                8 => 'GET',
                9 => 'PATCH',
                10 => 'PUT',
                11 => 'DELETE',
                12 => 'GET',
                13 => 'PATCH',
                14 => 'PUT',
                15 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
                4 => 'GET',
                5 => 'POST',
                6 => 'GET',
                7 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'sort',
                1 => 'filter',
                2 => 'sort',
                3 => 'filter',
                4 => 'sort',
                5 => 'filter',
                6 => 'sort',
                7 => 'filter',
            ),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'assistec\\V1\\Rest\\Servico\\ServicoEntity',
            'collection_class' => 'assistec\\V1\\Rest\\Servico\\ServicoCollection',
            'service_name' => 'servico',
        ),
        'assistec\\V1\\Rest\\Status\\Controller' => array(
            'listener' => 'assistec\\V1\\Rest\\Status\\StatusResource',
            'route_name' => 'assistec.rest.status',
            'route_identifier_name' => 'status_id',
            'collection_name' => 'status',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
                8 => 'GET',
                9 => 'PATCH',
                10 => 'PUT',
                11 => 'DELETE',
                12 => 'GET',
                13 => 'PATCH',
                14 => 'PUT',
                15 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
                4 => 'GET',
                5 => 'POST',
                6 => 'GET',
                7 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'StatusLib\\Entity',
            'collection_class' => 'StatusLib\\Collection',
            'service_name' => 'Status',
        ),
        'assistec\\V2\\Rest\\Servico\\Controller' => array(
            'listener' => 'assistec\\V2\\Rest\\Servico\\ServicoResource',
            'route_name' => 'assistec.rest.servico',
            'route_identifier_name' => 'servico_id',
            'collection_name' => 'servico',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'sort',
                1 => 'filter',
                2 => 'sort',
                3 => 'filter',
            ),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'assistec\\V2\\Rest\\Servico\\ServicoEntity',
            'collection_class' => 'assistec\\V2\\Rest\\Servico\\ServicoCollection',
            'service_name' => 'servico',
        ),
        'assistec\\V2\\Rest\\Fabricante\\Controller' => array(
            'listener' => 'assistec\\V2\\Rest\\Fabricante\\FabricanteResource',
            'route_name' => 'assistec.rest.fabricante',
            'route_identifier_name' => 'fabricante_id',
            'collection_name' => 'fabricante',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'assistec\\V2\\Rest\\Fabricante\\FabricanteEntity',
            'collection_class' => 'assistec\\V2\\Rest\\Fabricante\\FabricanteCollection',
            'service_name' => 'fabricante',
        ),
        'assistec\\V2\\Rest\\Cidade\\Controller' => array(
            'listener' => 'assistec\\V2\\Rest\\Cidade\\CidadeResource',
            'route_name' => 'assistec.rest.cidade',
            'route_identifier_name' => 'cidade_id',
            'collection_name' => 'cidade',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'GET',
                5 => 'PATCH',
                6 => 'PUT',
                7 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
                2 => 'GET',
                3 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'assistec\\V2\\Rest\\Cidade\\CidadeEntity',
            'collection_class' => 'assistec\\V2\\Rest\\Cidade\\CidadeCollection',
            'service_name' => 'cidade',
        ),
        'assistec\\V3\\Rest\\Servico\\Controller' => array(
            'listener' => 'assistec\\V3\\Rest\\Servico\\ServicoResource',
            'route_name' => 'assistec.rest.servico',
            'route_identifier_name' => 'servico_id',
            'collection_name' => 'servico',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'sort',
                1 => 'filter',
            ),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'assistec\\V3\\Rest\\Servico\\ServicoEntity',
            'collection_class' => 'assistec\\V3\\Rest\\Servico\\ServicoCollection',
            'service_name' => 'servico',
        ),
        'assistec\\V4\\Rest\\Servico\\Controller' => array(
            'listener' => 'assistec\\V4\\Rest\\Servico\\ServicoResource',
            'route_name' => 'assistec.rest.servico',
            'route_identifier_name' => 'servico_id',
            'collection_name' => 'servico',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'sort',
                1 => 'filter',
            ),
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => 'assistec\\V4\\Rest\\Servico\\ServicoEntity',
            'collection_class' => 'assistec\\V4\\Rest\\Servico\\ServicoCollection',
            'service_name' => 'servico',
        ),
        'assistec\\V4\\Rest\\Cidades\\Controller' => array(
            'listener' => 'assistec\\V4\\Rest\\Cidades\\CidadesResource',
            'route_name' => 'assistec.rest.cidades',
            'route_identifier_name' => 'cidades_id',
            'collection_name' => 'cidades',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'assistec\\V4\\Rest\\Cidades\\CidadesEntity',
            'collection_class' => 'assistec\\V4\\Rest\\Cidades\\CidadesCollection',
            'service_name' => 'cidades',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'assistec\\V1\\Rest\\Servico\\Controller' => 'HalJson',
            'assistec\\V1\\Rpc\\Ping\\Controller' => 'Json',
            'assistec\\V1\\Rest\\Status\\Controller' => 'HalJson',
            'assistec\\V2\\Rest\\Servico\\Controller' => 'HalJson',
            'assistec\\V2\\Rpc\\Ping\\Controller' => 'Json',
            'assistec\\V2\\Rest\\Fabricante\\Controller' => 'HalJson',
            'assistec\\V2\\Rest\\Cidade\\Controller' => 'HalJson',
            'assistec\\V3\\Rest\\Servico\\Controller' => 'HalJson',
            'assistec\\V3\\Rpc\\Ping\\Controller' => 'Json',
            'assistec\\V4\\Rest\\Servico\\Controller' => 'HalJson',
            'assistec\\V4\\Rpc\\Ping\\Controller' => 'Json',
            'assistec\\V4\\Rest\\Cidades\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'assistec\\V1\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.assistec.v1+json',
                4 => 'application/hal+json',
                5 => 'application/json',
                6 => 'application/vnd.assistec.v1+json',
                7 => 'application/hal+json',
                8 => 'application/json',
                9 => 'application/vnd.assistec.v1+json',
                10 => 'application/hal+json',
                11 => 'application/json',
            ),
            'assistec\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
                3 => 'application/vnd.assistec.v1+json',
                4 => 'application/json',
                5 => 'application/*+json',
                6 => 'application/vnd.assistec.v1+json',
                7 => 'application/json',
                8 => 'application/*+json',
                9 => 'application/vnd.assistec.v1+json',
                10 => 'application/json',
                11 => 'application/*+json',
            ),
            'assistec\\V1\\Rest\\Status\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.assistec.v1+json',
                4 => 'application/hal+json',
                5 => 'application/json',
                6 => 'application/vnd.assistec.v1+json',
                7 => 'application/hal+json',
                8 => 'application/json',
                9 => 'application/vnd.assistec.v1+json',
                10 => 'application/hal+json',
                11 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.assistec.v2+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'assistec\\V2\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
                2 => 'application/*+json',
                3 => 'application/vnd.assistec.v2+json',
                4 => 'application/json',
                5 => 'application/*+json',
            ),
            'assistec\\V2\\Rest\\Fabricante\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.assistec.v2+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Cidade\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
                3 => 'application/vnd.assistec.v2+json',
                4 => 'application/hal+json',
                5 => 'application/json',
            ),
            'assistec\\V3\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v3+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistec\\V3\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v3+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'assistec\\V4\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v4+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistec\\V4\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v4+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'assistec\\V4\\Rest\\Cidades\\Controller' => array(
                0 => 'application/vnd.assistec.v4+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'assistec\\V1\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v1+json',
                3 => 'application/json',
                4 => 'application/vnd.assistec.v1+json',
                5 => 'application/json',
                6 => 'application/vnd.assistec.v1+json',
                7 => 'application/json',
            ),
            'assistec\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v1+json',
                3 => 'application/json',
                4 => 'application/vnd.assistec.v1+json',
                5 => 'application/json',
                6 => 'application/vnd.assistec.v1+json',
                7 => 'application/json',
            ),
            'assistec\\V1\\Rest\\Status\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v1+json',
                3 => 'application/json',
                4 => 'application/vnd.assistec.v1+json',
                5 => 'application/json',
                6 => 'application/vnd.assistec.v1+json',
                7 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v2+json',
                3 => 'application/json',
            ),
            'assistec\\V2\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v2+json',
                3 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Fabricante\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v2+json',
                3 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Cidade\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
                2 => 'application/vnd.assistec.v2+json',
                3 => 'application/json',
            ),
            'assistec\\V3\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v3+json',
                1 => 'application/json',
            ),
            'assistec\\V3\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v3+json',
                1 => 'application/json',
            ),
            'assistec\\V4\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v4+json',
                1 => 'application/json',
            ),
            'assistec\\V4\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v4+json',
                1 => 'application/json',
            ),
            'assistec\\V4\\Rest\\Cidades\\Controller' => array(
                0 => 'application/vnd.assistec.v4+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'assistec\\V1\\Rest\\Servico\\ServicoEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V1\\Rest\\Servico\\ServicoCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'is_collection' => '1',
            ),
            'assistec\\V1\\Rest\\Status\\StatusEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'hydrator' => 'Zend\\Hydrator\\ObjectProperty',
            ),
            'assistec\\V1\\Rest\\Status\\StatusCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'is_collection' => '1',
            ),
            'assistec\\V2\\Rest\\Servico\\ServicoEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V2\\Rest\\Servico\\ServicoCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'is_collection' => '1',
            ),
            'assistec\\V2\\Rest\\Status\\StatusEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'hydrator' => 'Zend\\Hydrator\\ObjectProperty',
            ),
            'assistec\\V2\\Rest\\Status\\StatusCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'is_collection' => '1',
            ),
            'assistec\\V2\\Rest\\Fabricante\\FabricanteEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.fabricante',
                'route_identifier_name' => 'fabricante_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V2\\Rest\\Fabricante\\FabricanteCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.fabricante',
                'route_identifier_name' => 'fabricante_id',
                'is_collection' => '1',
            ),
            'assistec\\V2\\Rest\\Cidade\\CidadeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.cidade',
                'route_identifier_name' => 'cidade_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V2\\Rest\\Cidade\\CidadeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.cidade',
                'route_identifier_name' => 'cidade_id',
                'is_collection' => '1',
            ),
            'assistec\\V3\\Rest\\Servico\\ServicoEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V3\\Rest\\Servico\\ServicoCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'is_collection' => '1',
            ),
            'assistec\\V3\\Rest\\Status\\StatusEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'hydrator' => 'Zend\\Hydrator\\ObjectProperty',
            ),
            'assistec\\V3\\Rest\\Status\\StatusCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'is_collection' => '1',
            ),
            'assistec\\V4\\Rest\\Servico\\ServicoEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V4\\Rest\\Servico\\ServicoCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.servico',
                'route_identifier_name' => 'servico_id',
                'is_collection' => '1',
            ),
            'assistec\\V4\\Rest\\Status\\StatusEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'hydrator' => 'Zend\\Hydrator\\ObjectProperty',
            ),
            'assistec\\V4\\Rest\\Status\\StatusCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.status',
                'route_identifier_name' => 'status_id',
                'is_collection' => '1',
            ),
            'assistec\\V4\\Rest\\Cidades\\CidadesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.cidades',
                'route_identifier_name' => 'cidades_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V4\\Rest\\Cidades\\CidadesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.cidades',
                'route_identifier_name' => 'cidades_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'assistec\\V1\\Rest\\Servico\\ServicoResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'servico',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V1\\Rest\\Servico\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'assistec\\V1\\Rest\\Cidade\\CidadeResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'cidade',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V1\\Rest\\Cidade\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'assistec\\V2\\Rest\\Servico\\ServicoResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'servico',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V2\\Rest\\Servico\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'assistec\\V2\\Rest\\Servico\\ServicoResource\\Table',
                'resource_class' => 'assistec\\V2\\Rest\\Servico\\ServicoResource',
            ),
            'assistec\\V2\\Rest\\Fabricante\\FabricanteResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'fabricante',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V2\\Rest\\Fabricante\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'assistec\\V3\\Rest\\Servico\\ServicoResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'servico',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V3\\Rest\\Servico\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'assistec\\V3\\Rest\\Servico\\ServicoResource\\Table',
                'resource_class' => 'assistec\\V3\\Rest\\Servico\\ServicoResource',
            ),
            'assistec\\V4\\Rest\\Servico\\ServicoResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'servico',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V4\\Rest\\Servico\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'assistec\\V4\\Rest\\Servico\\ServicoResource\\Table',
                'resource_class' => 'assistec\\V4\\Rest\\Servico\\ServicoResource',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'assistec\\V1\\Rest\\Servico\\Controller' => array(
            'input_filter' => 'assistec\\V1\\Rest\\Servico\\Validator',
        ),
        'assistec\\V1\\Rpc\\Ping\\Controller' => array(
            'input_filter' => 'assistec\\V1\\Rpc\\Ping\\Validator',
        ),
        'assistec\\V1\\Rest\\Status\\Controller' => array(
            'input_filter' => 'assistec\\V1\\Rest\\Status\\Validator',
        ),
        'assistec\\V2\\Rest\\Servico\\Controller' => array(
            'input_filter' => 'assistec\\V2\\Rest\\Servico\\Validator',
        ),
        'assistec\\V2\\Rpc\\Ping\\Controller' => array(
            'input_filter' => 'assistec\\V2\\Rpc\\Ping\\Validator',
        ),
        'assistec\\V2\\Rest\\Fabricante\\Controller' => array(
            'input_filter' => 'assistec\\V2\\Rest\\Fabricante\\Validator',
        ),
        'assistec\\V3\\Rest\\Servico\\Controller' => array(
            'input_filter' => 'assistec\\V3\\Rest\\Servico\\Validator',
        ),
        'assistec\\V3\\Rpc\\Ping\\Controller' => array(
            'input_filter' => 'assistec\\V3\\Rpc\\Ping\\Validator',
        ),
        'assistec\\V4\\Rest\\Servico\\Controller' => array(
            'input_filter' => 'assistec\\V4\\Rest\\Servico\\Validator',
        ),
        'assistec\\V4\\Rpc\\Ping\\Controller' => array(
            'input_filter' => 'assistec\\V4\\Rpc\\Ping\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'assistec\\V1\\Rest\\Servico\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descricao',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'cidade_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'bairro',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'endereco',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'complemento',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'cep',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'telefone',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'email',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'site',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            10 => array(
                'name' => 'fabricantes',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            11 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            12 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            13 => array(
                'name' => 'cidade_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            14 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            15 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            16 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            17 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            18 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            19 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            20 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            21 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            22 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            23 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            24 => array(
                'name' => 'cidade_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            25 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            26 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            27 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            28 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            29 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            30 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            31 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            32 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            33 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            34 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            35 => array(
                'name' => 'cidade_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            36 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            37 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            38 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            39 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            40 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            41 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            42 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            43 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V1\\Rest\\Cidade\\Validator' => array(
            0 => array(
                'name' => 'estado_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'nome',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'nome_sistema',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            7 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            10 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            11 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V1\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
            1 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
            2 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
            3 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
        ),
        'assistec\\V1\\Rest\\Status\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            2 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
            3 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            4 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            5 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
            6 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            7 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            8 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
            9 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            10 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            11 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
        ),
        'assistec\\V2\\Rest\\Servico\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            10 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'cidade',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            11 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'estado',
            ),
            12 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'perfil',
            ),
            13 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            14 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            15 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            16 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            17 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            18 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            19 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            20 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            21 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            22 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            23 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'cidade',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            24 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'estado',
            ),
            25 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'perfil',
            ),
        ),
        'assistec\\V2\\Rest\\Cidade\\Validator' => array(
            0 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V2\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
            1 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
        ),
        'assistec\\V2\\Rest\\Status\\Validator' => array(
            0 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            1 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            2 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
            3 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            4 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            5 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
        ),
        'assistec\\V2\\Rest\\Estado\\Validator' => array(
            0 => array(
                'name' => 'sigla',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '2',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'nome',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'sigla',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '2',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V2\\Rest\\Fabricante\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'telefone',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'email',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'site',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'telefone',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V3\\Rest\\Servico\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            10 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'cidade',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            11 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'estado',
            ),
            12 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'perfil',
            ),
        ),
        'assistec\\V3\\Rest\\Cidade\\Validator' => array(
            0 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V3\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
        ),
        'assistec\\V3\\Rest\\Status\\Validator' => array(
            0 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            1 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            2 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
        ),
        'assistec\\V3\\Rest\\Estado\\Validator' => array(
            0 => array(
                'name' => 'sigla',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '2',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V3\\Rest\\Fabricante\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'telefone',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V4\\Rest\\Servico\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'descricao',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'bairro',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'endereco',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'complemento',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'cep',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'telefone',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'fabricantes',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            10 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'cidade',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            11 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '128',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'estado',
            ),
            12 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '50',
                            'min' => '1',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'name' => 'perfil',
            ),
        ),
        'assistec\\V4\\Rest\\Cidade\\Validator' => array(
            0 => array(
                'name' => 'estado_id',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'nome_sistema',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V4\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'required' => '1',
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
        ),
        'assistec\\V4\\Rest\\Status\\Validator' => array(
            0 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'message',
                'description' => 'A status message of no more than 140 characters',
                'error_message' => 'A status message must contain between 1 and 140 characters',
            ),
            1 => array(
                'required' => '1',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Regex',
                        'options' => array(
                            'pattern' => '/^(mwop|andi|zeev)$/',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'user',
                'description' => 'The user submitting the status message.',
                'error_message' => 'You must provide a valid user.',
            ),
            2 => array(
                'required' => '',
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Digits',
                        'options' => array(),
                    ),
                ),
                'filters' => array(),
                'name' => 'timestamp',
                'description' => 'The timestamp when the status message was last modified.',
                'error_message' => 'You must provide a timestamp.',
            ),
        ),
        'assistec\\V4\\Rest\\Estado\\Validator' => array(
            0 => array(
                'name' => 'sigla',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '2',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
        'assistec\\V4\\Rest\\Fabricante\\Validator' => array(
            0 => array(
                'name' => 'nome',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'telefone',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'email',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'site',
                'required' => '',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '1',
                            'max' => '128',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'assistec\\V1\\Rpc\\Ping\\Controller' => 'assistec\\V1\\Rpc\\Ping\\PingControllerFactory',
            'assistec\\V2\\Rpc\\Ping\\Controller' => 'assistec\\V2\\Rpc\\Ping\\PingControllerFactory',
            'assistec\\V3\\Rpc\\Ping\\Controller' => 'assistec\\V3\\Rpc\\Ping\\PingControllerFactory',
            'assistec\\V4\\Rpc\\Ping\\Controller' => 'assistec\\V4\\Rpc\\Ping\\PingControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'assistec\\V1\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'Ping',
            'http_methods' => array(
                0 => 'GET',
                1 => 'GET',
                2 => 'GET',
                3 => 'GET',
            ),
            'route_name' => 'assistec.rpc.ping',
        ),
        'assistec\\V2\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'Ping',
            'http_methods' => array(
                0 => 'GET',
                1 => 'GET',
            ),
            'route_name' => 'assistec.rpc.ping',
        ),
        'assistec\\V3\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'Ping',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'assistec.rpc.ping',
        ),
        'assistec\\V4\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'Ping',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'assistec.rpc.ping',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'assistec\\V1\\Rest\\Status\\StatusResource' => 'assistec\\V1\\Rest\\Status\\StatusResourceFactory',
            'assistec\\V2\\Rest\\Cidade\\CidadeResource' => 'assistec\\V2\\Rest\\Cidade\\CidadeResourceFactory',
            'assistec\\V4\\Rest\\Cidades\\CidadesResource' => 'assistec\\V4\\Rest\\Cidades\\CidadesResourceFactory',
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'assistec\\V1\\Rest\\Status\\Controller' => array(
                'collection' => array(
                    'GET' => '',
                    'POST' => '1',
                    'PUT' => '',
                    'PATCH' => '',
                    'DELETE' => '',
                ),
                'entity' => array(
                    'GET' => '',
                    'POST' => '',
                    'PUT' => '1',
                    'PATCH' => '1',
                    'DELETE' => '1',
                ),
            ),
        ),
    ),
);
