<!--footer-->
	<div class="footer">
		<div class="container">
			<p>Copyright © template. All rights reserved | Design by <a href="http://p8queiroz.com">p8queiroz</a></p>
		</div>
	</div>
	<!--//footer-->
	<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
	</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/bootstrap.js"> </script>
	<?php wp_footer(); ?> 
</body>
</html>   
   