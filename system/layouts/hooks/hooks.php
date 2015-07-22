<?php

use Jc\Hook\jc_hook;

$tpl_path = str_replace('/hooks','',__DIR__ . '/templates/');

if($uri == '/login' || 1)
{
	$title = 'Login';
	jc_hook::register('layout', array('class' => 'Jc\\Engine\\jc_controller', 'method' => 'template', 'value' => array('tpl' => $tpl_path.'layout_login', 'html_title' => @$title)));
}
?>