<?php 

namespace App;

use Jc\Hook\jc_hook;

?>
<!DOCTYPE html>
<html>
<head>

<meta name="robots" content="index,follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">

<title><?php echo $html_title; ?></title>

<?php
jc_hook::execute('css');
jc_hook::execute('js');
?>

<style type="text/css">

body{
	background-color: #F5F5F5;
	font-family: sans-serif;
	font-size: 12px;
	font-weight: bold;
}

h1{
	font-size: 22px;
	padding: 0;
	margin: 0;
	color: #333333;
}

form{
	width: 275px;
}

#container{
	position: relative;
	top: 30px;
	margin: 0 auto;
    background: transparent;
}

#container #main{
    margin: 0 auto;
    width: 315px;
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    padding: 20px 20px 20px;
    margin-bottom: 20px;
}

span{
	color: #000000;
}

span.glyphicon{
    color: white;
}

input{
	padding: 4px;
	width: 100%;
}

input[type='checkbox']{
	width: auto;
	position: relative;
    top: 2px;
}

body .container {
    padding: 0px;
}
</style>

</head>
<body>

<div id="container" class="container">
    <div id="main">
        <?php echo $this->session->flashdata(); ?>

        <?php echo $content; ?>
    </div>
</div>

</body>
</html>