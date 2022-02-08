<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php bloginfo('name') ?></title>
    <?php
        wp_head();
    ?>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/base.css')?>">
   <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/vendor.min.css')?>">
   <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/main.css')?>">     

   <!-- script
   ================================================== -->
	<script src="<?php echo get_theme_file_uri('js/modernizr.js')?>"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_theme_file_uri('favicon.png')?>" >

</head>

<body>

	<!-- header
   ================================================== -->
   <header id="main-header">

   	<div class="row">

	      <div class="logo">
	         <a href="index.php">Kreo</a> <!-- mzhint -->
	      </div>

	      <nav id="nav-wrap">         
	         
	         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
	         	<span class="menu-icon">Menu</span>
	         </a>
         	<a class="mobile-btn" href="#" title="Hide navigation">
         		<span class="menu-icon">Menu</span>
         	</a>            

	         <ul id="nav" class="nav">
	            <li><a class="smoothscroll" href="index.php#Home">Home.</a></li>
		         <li class="current"><a class="smoothscroll" href="index.php#portfolio">Works.</a></li>
	            <li><a class="smoothscroll" href="index.php#services">Services.</a></li>
	            <li><a class="smoothscroll" href="index.php#about">About.</a></li>
	            <li><a class="smoothscroll" href="index.php#contact">Contact.</a></li>
	         </ul> <!-- end #nav -->

	      </nav> <!-- end #nav-wrap -->

	      <ul class="header-social">
	        	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	        	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	        	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	      </ul>      

	   </div>

   </header> <!-- end header -->

