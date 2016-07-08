<?php
return array(
    'db' => array(
        'adapters' => array(
            'assistec-backend' => array(
                'charset' => 'utf8',
                'database' => 'assistec-backend',
                'driver' => 'Mysqli',
                'hostname' => 'mysql873.umbler.com',
                'username' => 'assistec-backend',
                'password' => '4r{FL6j9a}',
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
