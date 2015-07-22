<?php

define('JC_JS_REVISION', '1'); // Increase by one when a js modification has been done to force the user to reload it.
define('JC_CSS_REVISION', '1'); // Increase by one when a css modification has been done to force the user to reload it.

define('PATH_ROOT', '/var/www/jc_framework_sample/');
define('PATH_JC_APPLICATION', '/var/www/jc_framework_sample/');
define('PATH_STORAGE', '/var/www/storage/');

$jc_db_config = array(
    'master' => array(
        array(
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'pass',
            'database' => 'production',
            'allow' => array(),
            'multi-mode' => 'fail-over',
        )
    ),
    'jc_session' => array(
        array(
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'pass',
            'database' => 'production',
            'allow' => array(),
            'multi-mode' => 'fail-over',
        )
    )
);

if(substr(__DIR__, 0, 14) == '/mnt/hgfs/www/')
{
    $jc_db_config['master'] = array(
        array(
            'host' => 'localhost',
            'user' => 'dev',
            'pass' => 'pass',
            'database' => 'development',
            'allow' => array(),
        )
    );

    $jc_db_config['jc_session'] = array(
        array(
            'host' => 'localhost',
            'user' => 'dev',
            'pass' => 'pass',
            'database' => 'development',
            'allow' => array(),
        )
    );
}

// SMTP config
define('JC_EMAIL_HOST', 'smtp.gmail.com');
define('JC_EMAIL_USERNAME', 'info@example.com');
define('JC_EMAIL_PASSWORD', 'password');
define('JC_EMAIL_ENCRYPTION', 'ssl');
define('JC_EMAIL_PORT', 465);

?>