<?php

namespace App;

use Jc\Engine\jc_engine;
use Jc\Hook\jc_hook;


// Set default timezone.
date_default_timezone_set('Europe/Stockholm');

// Config file
require_once('config.php');

// Vendor autoload.
if(is_readable(PATH_ROOT . 'vendor/autoload.php'))
{
    include_once(PATH_ROOT . 'vendor/autoload.php');
}
else
{
    exit('Please run "composer install" in your project folder before you proceed.');
}

// JC FRAMEWORK
include_once(PATH_ROOT . 'vendor/JimCronqvist/jc_framework/src/engine.php');

// Run the install method the first time you initiate this project.
//jc_engine::install();

// Register routes
jc_engine::route('/*', null, PATH_JC_FRAMEWORK, PATH_JC_APPLICATION_SYSTEM);

// Execute the page.
jc_engine::execute();

?>