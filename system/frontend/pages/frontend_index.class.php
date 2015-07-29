<?php

namespace App;

use Jc\Engine\Controller;

class frontend_index_controller extends Controller
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