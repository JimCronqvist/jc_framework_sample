<?php

use Jc\Hook\Hook;

$tpl_path = str_replace('/hooks','',__DIR__ . '/templates/');

if($uri == '/login' || 1)
{
	$title = 'Login';
	Hook::register('layout', array('class' => 'Jc\\Engine\\Controller', 'method' => 'template', 'value' => array('tpl' => $tpl_path.'layout_login', 'html_title' => @$title)));
}
?>