<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta content="no-cache" http-equiv="Cache-Control" />
<meta content="no-cache" http-equiv="Pragma" />

<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/admin/style.css" type="text/css" /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

<title>後台管理系統</title>
</head>
<body>
	<div id="wrap">
		<div id="wrap2">
			<div id="main">
				<div id="header" > 
					<p class="title">後台管理系統</p> 
				</div> 
				<div id="content" class="left">
					<?php echo $main_area; ?>
				</div>
				<div class="clear_b"></div>
			</div>
			<div class="wrap2_closer"></div>
		</div>	
		<div class="clear_b wrap_closer"></div>
	</div>
	
	<div id="footer">
	</div>
	
<script>
$(function() {
	$( "input:submit,input:button,input:reset " ).button();
	$( "#tabs" ).tabs();
});

<?php if(is_array($this->session->userdata("alert_messages"))):?>
<?php foreach($this->session->userdata("alert_messages") as $message):?>
alert('<?php echo $message;?>');
<?php endforeach;?>
<?php $this->session->unset_userdata('alert_messages');?>
<?php endif;?>
</script>
</body>
</html>