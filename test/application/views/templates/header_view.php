
<!--Хэдер-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	  	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<title>Мини почтовый клиент</title>
		<meta name="keywords" content="" />
	    <meta name="description" content="" />
		
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>media/js/checked_mail.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>media/js/DataTables_include.js"></script>
		<script type="text/javascript" src="<?=base_url();?>media/js/send_form.js"></script>
		<script type="text/javascript">
			var send_url="<?=base_url();?>send_ajax";
			
		</script>
		
		
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>media/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>media/css/users_css.css">
		<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	</head>
	<body>
		<div class="container" style='margin-top:20px;'> 
			<div class="row">