<?php

return [
    'jc' => [
        'timezone' => 'Europe/Stockholm',
        'logRequests' => false,

        // Security string, will be used for encryption and when generating security hashes.
        // Should contain between 20 and 32 random characters.
        'securityString' => '',

        'db' => [
            'master' => [
                [
                    'host' => 'localhost',
                    'user' => 'root',
                    'pass' => 'pass',
                    'database' => 'production',
                    'allow' => array(),
                    'multi-mode' => 'fail-over',
                ],
            ],
            'jc_session' => [
                [
                    'host' => 'localhost',
                    'user' => 'root',
                    'pass' => 'pass',
                    'database' => 'production',
                    'allow' => array(),
                    'multi-mode' => 'fail-over',
                ],
            ],
        ],
        'sms' => [
            'provider' => 'SmsTeknik',
            'account'  => '',
            'username' => '',
            'password' => '',
        ],
        'email' => [
            'host' => '',
            'username' => '',
            'password' => '',
            'encryption' => 'ssl', // Supported values: '', 'ssl', 'tls'
            'port' => 465,
            'imagesPath' => PATH_JC_APPLICATION . 'html/images/email/' // A path to where the images are located when embedded.
        ],
        'debug' => [
            'on' => true,
            'memoryLimit' => 45,
            'cookieValue' => '', // Enter a long random string here
        ],
        'google' => [
            'apiKey' => '',
        ],
        'error' => [
            'logo' => '' // Absolute path to the logo image displayed in the error messages.
        ],
        'session' => [
            'driver' => 'files', // accepts: files, database
        ]
    ],
];

?>