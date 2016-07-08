<?php
return array(
    'db' => array(
        'adapters' => array(
            'assistec-backend' => array(),
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
