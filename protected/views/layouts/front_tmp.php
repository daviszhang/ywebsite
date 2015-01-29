<!DOCTYPE HTML>
<!--
	Miniport 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="<?php echo FRONT_JS_URL;?>jquery.min.js"></script>
		<script src="<?php echo FRONT_JS_URL;?>config.js"></script>
		<script src="<?php echo FRONT_JS_URL;?>skel.min.js"></script>
		
		<link rel="stylesheet" href="<?php echo FRONT_CSS_URL;?>skel-noscript.css" />
		<link rel="stylesheet" href="<?php echo FRONT_CSS_URL;?>style.css" />
		<link rel="stylesheet" href="<?php echo FRONT_CSS_URL;?>style-desktop.css" />
		
		<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="<?php echo CSS_URL;?>bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo CSS_URL;?>bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo CSS_URL;?>font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo CSS_URL;?>style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo CSS_URL;?>style.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo CSS_URL;?>style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="<?php echo CSS_URL;?>default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="<?php echo CSS_URL;?>uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="<?php echo CSS_URL;?>login.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="<?php echo IMG_URL;?>favicon.ico" />
		
		
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>
	<!-- header -->
	<?php include 'header.php';?>
	<!-- content -->
	<?php echo $content; ?>

     <div class="wrapper wrapper-style4">
     	<?php include 'footer.php';?>
     </div>       


	</body>
</html>