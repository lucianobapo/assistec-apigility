<?php
return array(
    'db' => array(
        'adapters' => array(
            'assistec-backend' => array(
                'charset' => 'utf8',
                'database' => 'guiaassi_assistec',
                'driver' => 'PDO_Mysql',
                'hostname' => 'localhost',
                'username' => 'assiste',
                'password' => 'assistec',
                'driver_options' => array(
                    'buffer_results' => true,
                ),
            ),
        ),
    ),
    'statuslib' => array(
        'array_mapper_path' => 'data/statuslib.php',
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'adapters' => array(
                'status' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\HttpAdapter',
                    'options' => array(
                        'accept_schemes' => array(
                            0 => 'basic',
                        ),
                        'realm' => 'api',
                        'htpasswd' => 'data/.htpasswd',
                    ),
                ),
            ),
        ),
    ),
);
