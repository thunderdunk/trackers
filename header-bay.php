<?php

/*
 * Header for Bay Area pages - contains Bay Area logo
 */

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" /><!--Make sure phones don't scale the layout-->

	<title>Trackers Earth</title>

	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->

	<!-- Main stylesheet: includes Magnific CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css" /> 

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Roboto+Slab:400,300' rel='stylesheet' type='text/css'>

	<!-- Font Awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 

	<!-- jQuery UI -->
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.min.js"></script> 

	<!-- FlexSlider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!--BUGGYFILL TO FIX VIEWPORT UNITS IN IOS @link https://github.com/rodneyrehm/viewport-units-buggyfill-->
	<script src="js/viewport-units-buggyfill.js"></script>
	<script></script>

	<script src="js/initiators.js"></script>

</head>

<body>

	<div id="page">
		<header id="masthead" class="gradient">
			<div class="container">
			<h1 class="site-branding"><a href="#"><img src="images/Logo-TrackersPDX-dropshadow.png" title="Trackers PDX" alt="Trackers PDX logo" /></a></h1>

				<a href="#" class="menu-toggle open-panel"><i class="fa fa-navicon"></i></a>
				
				<?php include 'navigation.php'; ?>
				

			</div><!--.container-->
			
		</header><!--#masthead-->
		
		<main>