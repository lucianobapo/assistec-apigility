<?php
return array(
    'router' => array(
        'routes' => array(
            'assistec-api.rest.servico' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/servico[/:servico_id]',
                    'defaults' => array(
                        'controller' => 'assistecApi\\V1\\Rest\\Servico\\Controller',
                    ),
                ),
            ),
            'assistec-api.rpc.cidade' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/cidade[/:params]',
                    'defaults' => array(
                        'controller' => 'assistecApi\\V1\\Rpc\\Cidade\\Controller',
                        'action' => 'cidade',
                    ),
                ),
            ),
            'assistec-api.rpc.estado' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/estado',
                    'defaults' => array(
                        'controller' => 'assistecApi\\V1\\Rpc\\Estado\\Controller',
                        'action' => 'estado',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'assistec-api.rest.servico',
            1 => 'assistec-api.rpc.cidade',
            2 => 'assistec-api.rpc.estado',
        ),
    ),
    'zf-rest' => array(
        'assistecApi\\V1\\Rest\\Servico\\Controller' => array(
            'listener' => 'assistecApi\\V1\\Rest\\Servico\\ServicoResource',
            'route_name' => 'assistec-api.rest.servico',
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
                0 => 'order',
                1 => 'where',
            ),
            'page_size' => '100',
            'page_size_param' => null,
            'entity_class' => 'assistecApi\\V1\\Rest\\Servico\\ServicoEntity',
            'collection_class' => 'assistecApi\\V1\\Rest\\Servico\\ServicoCollection',
            'service_name' => 'servico',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'assistecApi\\V1\\Rest\\Servico\\Controller' => 'HalJson',
            'assistecApi\\V1\\Rpc\\Cidade\\Controller' => 'Json',
            'assistecApi\\V1\\Rpc\\Estado\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'assistecApi\\V1\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'assistecApi\\V1\\Rpc\\Cidade\\Controller' => array(
                0 => 'application/vnd.assistec-api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'assistecApi\\V1\\Rpc\\Estado\\Controller' => array(
                0 => 'application/vnd.assistec-api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'assistecApi\\V1\\Rest\\Servico\\Controller' => array(
                0 => 'application/vnd.assistec-api.v1+json',
                1 => 'application/json',
                2 => 'multipart/form-data',
            ),
            'assistecApi\\V1\\Rpc\\Cidade\\Controller' => array(
                0 => 'application/vnd.assistec-api.v1+json',
                1 => 'application/json',
            ),
            'assistecApi\\V1\\Rpc\\Estado\\Controller' => array(
                0 => 'application/vnd.assistec-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'assistecApi\\V1\\Rest\\Servico\\ServicoEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec-api.rest.servico',
                'route_identifier_name' => 'servico_id',
                'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
            ),
            'assistecApi\\V1\\Rest\\Servico\\ServicoCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'assistec-api.rest.servico',
                'route_identifier_name' => 'servico_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'assistecApi\\V1\\Rest\\Servico\\ServicoResource' => array(
                'adapter_name' => 'assistec-backend',
                'table_name' => 'servico',
                'hydrator_name' => 'Zend\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'assistecApi\\V1\\Rest\\Servico\\Controller',
                'entity_identifier_name' => 'id',
                'resource_class' => 'assistecApi\\V1\\Rest\\Servico\\ServicoResource',
                'table_service' => 'assistecApi\\V1\\Rest\\Servico\\ServicoResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'assistecApi\\V1\\Rest\\Servico\\Controller' => array(
            'input_filter' => 'assistecApi\\V1\\Rest\\Servico\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'assistecApi\\V1\\Rest\\Servico\\Validator' => array(
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
            3 => array(
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
            4 => array(
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
            5 => array(
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
            6 => array(
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
            7 => array(
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
            8 => array(
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
            9 => array(
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
            10 => array(
                'name' => 'cidade',
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
            12 => array(
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
            13 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '255',
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
                'name' => 'fotoCapa',
            ),
            14 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '255',
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
                'name' => 'fotoLogo',
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'assistecApi\\V1\\Rpc\\Cidade\\Controller' => 'assistecApi\\V1\\Rpc\\Cidade\\CidadeControllerFactory',
            'assistecApi\\V1\\Rpc\\Estado\\Controller' => 'assistecApi\\V1\\Rpc\\Estado\\EstadoControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'assistecApi\\V1\\Rpc\\Cidade\\Controller' => array(
            'service_name' => 'cidade',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'assistec-api.rpc.cidade',
        ),
        'assistecApi\\V1\\Rpc\\Estado\\Controller' => array(
            'service_name' => 'estado',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'assistec-api.rpc.estado',
        ),
    ),
);
