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
            'assistec.rest.cidade' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/cidade[/:cidade_id]',
                    'defaults' => array(
                        'controller' => 'assistec\\V1\\Rest\\Cidade\\Controller',
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
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'assistec.rest.servico',
            1 => 'assistec.rest.cidade',
            2 => 'assistec.rpc.ping',
            3 => 'assistec.rest.status',
            4 => 'assistec.rest.estado',
            5 => 'assistec.rest.fabricante',
        ),
        'default_version' => 2,
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
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'assistec\\V1\\Rest\\Servico\\ServicoEntity',
            'collection_class' => 'assistec\\V1\\Rest\\Servico\\ServicoCollection',
            'service_name' => 'servico',
        ),
        'assistec\\V1\\Rest\\Cidade\\Controller' => array(
            'listener' => 'assistec\\V1\\Rest\\Cidade\\CidadeResource',
            'route_name' => 'assistec.rest.cidade',
            'route_identifier_name' => 'cidade_id',
            'collection_name' => 'cidade',
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
            'entity_class' => 'assistec\\V1\\Rest\\Cidade\\CidadeEntity',
            'collection_class' => 'assistec\\V1\\Rest\\Cidade\\CidadeCollection',
            'service_name' => 'cidade',
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
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
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
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
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
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'assistec\\V2\\Rest\\Fabricante\\FabricanteEntity',
            'collection_class' => 'assistec\\V2\\Rest\\Fabricante\\FabricanteCollection',
            'service_name' => 'fabricante',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'assistec\\V1\\Rest\\Servico\\Controller' => 'HalJson',
            'assistec\\V1\\Rest\\Cidade\\Controller' => 'HalJson',
            'assistec\\V1\\Rpc\\Ping\\Controller' => 'Json',
            'assistec\\V1\\Rest\\Status\\Controller' => 'HalJson',
            'assistec\\V2\\Rest\\Servico\\Controller' => 'HalJson',
            'assistec\\V2\\Rpc\\Ping\\Controller' => 'Json',
            'assistec\\V2\\Rest\\Fabricante\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'assistec\\V1\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistec\\V1\\Rest\\Cidade\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistec\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'assistec\\V1\\Rest\\Status\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistec\\V2\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'assistec\\V2\\Rest\\Fabricante\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'assistec\\V1\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
            ),
            'assistec\\V1\\Rest\\Cidade\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
            ),
            'assistec\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
            ),
            'assistec\\V1\\Rest\\Status\\Controller' => array(
                0 => 'application/vnd.assistec.v1+json',
                1 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
            ),
            'assistec\\V2\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
                1 => 'application/json',
            ),
            'assistec\\V2\\Rest\\Fabricante\\Controller' => array(
                0 => 'application/vnd.assistec.v2+json',
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
                'is_collection' => true,
            ),
            'assistec\\V1\\Rest\\Cidade\\CidadeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.cidade',
                'route_identifier_name' => 'cidade_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistec\\V1\\Rest\\Cidade\\CidadeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec.rest.cidade',
                'route_identifier_name' => 'cidade_id',
                'is_collection' => true,
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
                'is_collection' => true,
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
            ),
            'assistec\\V2\\Rest\\Fabricante\\FabricanteResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'fabricante',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistec\\V2\\Rest\\Fabricante\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'assistec\\V1\\Rest\\Servico\\Controller' => array(
            'input_filter' => 'assistec\\V1\\Rest\\Servico\\Validator',
        ),
        'assistec\\V1\\Rest\\Cidade\\Controller' => array(
            'input_filter' => 'assistec\\V1\\Rest\\Cidade\\Validator',
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
        ),
        'assistec\\V1\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'required' => true,
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
        ),
        'assistec\\V2\\Rpc\\Ping\\Validator' => array(
            0 => array(
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
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'assistec\\V1\\Rpc\\Ping\\Controller' => 'assistec\\V1\\Rpc\\Ping\\PingControllerFactory',
            'assistec\\V2\\Rpc\\Ping\\Controller' => 'assistec\\V2\\Rpc\\Ping\\PingControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'assistec\\V1\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'Ping',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'assistec.rpc.ping',
        ),
        'assistec\\V2\\Rpc\\Ping\\Controller' => array(
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
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'assistec\\V1\\Rest\\Status\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
);
