<?php
return array(
    'db' => array(
        'adapters' => array(
            'assistec-backend' => array(
                'charset' => 'utf8',
                'database' => 'assistec-backend',
                'driver' => 'PDO_Mysql',
                'hostname' => 'localhost',
                'username' => 'assistec-backend',
                'password' => 'assistec-backend',
                'driver_options' => array(
                    'buffer_results' => true,
                ),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'assistec\\V1' => 'status',
            ),
        ),
    ),
);
