<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Template</title>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/css/component.css" type="text/css" rel="stylesheet" media="all">

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
					<a href="index.html">my <span>Target</span></a>
				</div>							 
				<div class="top-nav">						
					<ul class="flexy-menu orange nav1">
						<li><a class="active"  href="#home">Home</a></li>						
						<li><a class="scroll"  href="#about">About</a></li> 
						<li><a class="scroll"  href="#services">Services</a></li>
						<li><a class="scroll"  href="#portfolio">Portfolio</a></li>           
						<li><a class="scroll"  href="#contact">Contact</a></li>
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
			</div>
		</div>	
		<div class="row">
				<div class="img-banner pull-right">  
					<img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' );?>/images/banner.jpg" />   
				</div>
		</div>		
	</div>
	<!--//banner-->
	
	  <!--1. Mobile-->
	  <!--2. Tab-->
	  <!--3. Desktop-->
	  <!--4. Large-->
	  <!--
			<div class="row">
				<div class="col-xs-12 hidden-sm hidden-md hidden-lg">  
					<img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' );?>/images/img12.jpg" />   
				</div>
				<div class="hidden-xs col-sm-12 hidden-md hidden-lg">
					<img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' );?>/images/img13.jpg" />  
				</div>
				<div class="hidden-xs hidden-sm col-md-12 hidden-lg">
					<img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' );?>/images/img14.jpg" />   
				</div>
				<div class="hidden-xs hidden-sm hidden-md col-lg-12">
					<img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' );?>/images/img19.jpg" />  
				</div>
			</div> 
	  -->