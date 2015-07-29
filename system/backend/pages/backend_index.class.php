<?php

namespace App;

use Jc\Engine\Controller;

class backend_index_controller extends Controller
{
    public static function url_hook($uri)
    {
        return substr($uri, 0, 8) == '/backend' && user::current()->is_signed_in() ? 10 : 0;
    }

    public function execute($uri)
    {
        echo 'Hidden!';
    }
}

?>