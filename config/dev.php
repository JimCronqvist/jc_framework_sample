<?php

return [
    'jc' => [
        'logRequests' => false,

        'db' => [
            'master' => [
                [
                    'host' => 'localhost',
                    'user' => 'root',
                    'pass' => 'pass',
                    'database' => 'development',
                    'allow' => array(),
                    'multi-mode' => 'fail-over',
                ],
            ],
            'jc_session' => [
                [
                    'host' => 'localhost',
                    'user' => 'root',
                    'pass' => 'pass',
                    'database' => 'development',
                    'allow' => array(),
                    'multi-mode' => 'fail-over',
                ],
            ],
        ],
    ],
];

?>