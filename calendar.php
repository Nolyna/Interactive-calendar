<?xml version = "1.0"?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
		<title>Interactive Calendar</title>
		<link type="text/css" rel="stylesheet" href="calstyle.css"/>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	</head>
	<?php include_once('functions.php'); ?>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>
	<body>        
		<h2 style="text-align: center">Interactive Calendar</h2>
        <br>
        <div id="calen">
			<?php echo getCal(); ?>
		</div>	
	</body>
</html>