<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Sullivan</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/ie.css" type="text/css" media="screen" /><![endif]-->
	<!-- The 1140px Grid - http://cssgrid.net/ -->
	<!-- Your styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" type="text/css" media="screen" />
	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->

<?php wp_head() ?>

</head>

<body <?php body_class();?>>

	<section class="header-container">
		<header class="row header">
			<div class="fourcol logo">
				<a href="http://timsullivan.krd-design.net"><img src="<?php bloginfo('template_directory')?>/images/logo.png"></a>
			</div>
			<div class="onecol"></div>
			<nav class="sevencol last">
				<ul id="nav">
					<li><a href="<?php echo home_url();?>">Home</a></li>
					<li><a href="<?php echo get_permalink(30);?>">Areas of Practice</a>
					<ul class="child">
						<li><a href="<?php echo get_permalink(17);?>">Personal Injury</a></li>
						<li><a href="<?php echo get_permalink(19);?>">Motor Vehicle Accidents</a></li>
						<li><a href="<?php echo get_permalink(21);?>">Trip, Slip & Fall</a></li>
						<li><a href="<?php echo get_permalink(24);?>">Construction Accidents</a></li>
						<li><a href="<?php echo get_permalink(26);?>">Medical Malpractice</a></li>
						<li><a href="<?php echo get_permalink(28);?>">Premise Liability</a></li>
						<li><a href="<?php echo get_permalink(30);?>">Worker Compensation</a></li>
					</ul>
					
					
					</li>
						
					<li><a href="<?php echo get_permalink(10);?>">About Us</a></li>
					<li><a href="<?php echo get_permalink(12);?>">Case Results</a></li>
					<li><a href="<?php echo get_permalink(14);?>">Contact</a></li>
				</ul>
			</nav>
			
		</header>
	</section>