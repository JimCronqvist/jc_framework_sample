<?php

namespace App;

use Jc\Engine\jc_controller;

class login_controller extends jc_controller
{
    public static function url_hook($uri)
    {
        return $uri == '/login' ? 10 : 1; // Returns 1 no matter what, in order to use this as a fall-back controller.
    }

    public function execute($uri)
    {
        if($uri == '/login')
        {
            echo 'Login';
        }
        else
        {
            $this->redirect = '/login?redirect=' . urlencode(str_replace(array('?', '&'), array('**','*'), $_SERVER['REQUEST_URI']));
        }
    }
}

?>