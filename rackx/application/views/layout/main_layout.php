<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta content="no-cache" http-equiv="Cache-Control" />
<meta content="no-cache" http-equiv="Pragma" />

<!-- <link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" type="text/css" /> -->
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

<title><?php echo !empty($title) ? $title : '' ?></title>
</head>
<body>
<?php if( !empty($title) ) {?><h1 align="center"><?php echo $title ?></h1><?php } ?>

<?php echo $main_area ?>

</body>
</html>