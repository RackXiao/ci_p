<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html> 
<head>
<meta name="author" content="Rack Xiao" />
<meta name="description" content="" />
<meta name="keywords" content="">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css"></script>



<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" /> 

<title><?=!empty($title)?$title:''?></title>

<?=!empty($head_additional)?$head_additional:""?>
<?=!empty($js_additional)?$js_additional:""?>
<?=!empty($css_additional)?$css_additional:""?>
</head>
<body>
<?php if( !empty($title) ) {?><h1 align="center"><?php echo $title ?></h1><?php } ?>

<?php echo $main_area ?>

<div class="header">

</div>

<div class="wrapper">
<?=!empty($body)?$body:""?>
</div>

<div class="footer">
<?=!empty($footer)?$footer:""?>
</div>

</body>
</html>