<?php

namespace App;

use Jc\Engine\jc_controller;
use Jc\Filesystem\jc_file;


class files_display extends jc_controller
{
    public static function url_hook($uri)
    {
        $patterns = array(
            '#^/images/([a-zA-Z0-9._-]*)#',
        );
        
        foreach($patterns as $pattern)
        {
            if(preg_match($pattern,$uri))
            {
                return 5;
            }
        }
        return 0;
    }
    
    public function execute($uri)
    {
    }

    public function render($uri)
    {
        ini_set('gd.jpeg_ignore_warning', 1);

        if(preg_match('#^/images/(.*)#', $uri, $matches))
        {
            $file = new jc_file(PATH_IMAGES . jc_file::sanitizeFilename($matches[1]));

            if(isset($_GET['width']) && isset($_GET['height']))
            {
                if($file->file_exists)
                {
                    if(isset($_GET['type']) && $_GET['type'] == 'crop')
                    {
                        $file->crop($_GET['width'], $_GET['height']);
                    }
                    else
                    {
                        $file->resizeToFit($_GET['width'], $_GET['height']);
                    }
                    $file->image_output();
                }
            }
            else
            {
                if(isset($_GET['download']))
                {
                    $file->download(true);
                }
                else
                {
                    $file->output(true);
                }
            }
        }
    }
}

?>