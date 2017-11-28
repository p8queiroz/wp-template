<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Template</title>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/style.css" type="text/css" rel="stylesheet" media="all">

	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="p8queiroz responsive template" />
	<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
	function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery-1.11.1.min.js"></script> 
	<script src="<?php echo get_bloginfo( 'template_directory' );?>/js/modernizr.custom.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/easing.js"></script>	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!--//end-smoth-scrolling-->
	<!--menu js-->
	<script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/js/flexy-menu.js"></script>
	<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400, indicator: true});});</script>
	<!--//menu js-->
	
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	
	<?php wp_head();?>
</head>

<body>
	<!--banner-->
	<div class="banner">	
		<script src="<?php echo get_bloginfo( 'template_directory' );?>/js/responsiveslides.min.js"></script>
		<script>  
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			  });
			});
		  </script>
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="index.html">my <span>Company Name</span></a>
				</div>							 
				<div class="top-nav">						
					<ul class="flexy-menu orange nav1">
						<li><a class="active"  href="index.html">Home</a></li>						
						<li><a href="#">About</a>
							<ul>
								<li><a href="about.html">Lorem1</a></li>
								<li><a href="about.html">Lorem2</a></li>
								<li><a href="about.html">Lorem3</a></li>
								<li><a href="about.html">Lorem4</a></li>
							</ul>
						</li> 
						<li><a href="services.html">Services</a></li>
						<li><a href="#">Gallery</a>
							<ul>
								<li><a href="gallery.html">Gallery 1</a></li>
								<li><a href="gallery.html">Gallery 2</a></li>
								<li><a href="gallery.html">Gallery 3</a></li>
							 </ul>
						</li>               
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	 
		<div class="slider">
			<div class="caption">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li><h1>MARKETING <br> DIGITAL</h1></li>	
						<li><h1>CRIAÇÃO <br> DE SITES</h1></li>
						<li><h1>OTIMIZE  <br> SEU SITE </h1></li>
					</ul>	
					<h4>Melhore o posicionamento do seu site <br> 
					nas buscas do google</h4>
					<a class="readmore" href="#">MORE</a>
				</div>
				
				<!--
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li><h1>Marketing  Digital</h1></li>	
						<li><h1>Crie sua Franchise</h1></li>
						<li><h1>Otimize seu site</h1></li>
					</ul>	
					<h4>Melhore o posicionamento do seu site nas buscas do google</h4>
					<a class="readmore" href="#">MORE</a>
				</div>
				
				-->
				
			</div>
		</div>			 
	</div>
	<!--//banner-->