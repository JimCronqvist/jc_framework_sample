<?php

namespace App;

use Jc\Engine\jc_controller;

class frontend_index_controller extends jc_controller
{
    public static function url_hook($uri)
    {
        return $uri == '/' ? 10 : 0;
    }

    public function execute($uri)
    {
        $this->load->view('hello');
    }
}

?>