</div>
<!-- #main -->
</div>
<!-- #main-container -->

<div class="footer-container">
	<footer class="wrapper">
		<div class="social">
			<h2>Social</h2>
			<ul>
				<!-- TODO: Add genericons -->
				<li><a class="genericon genericon-twitter" href="https://twitter.com/RMRacers"></a></li>
			</ul>
		</div>
		<div class="navigation">
			<h2>Navigation</h2>
			<?php wp_nav_menu( array('container' => '', 'menu' => '', 'menu_class' => 'links') ); ?>
		</div>
		<div class="recentposts">
			<h2>Recent Posts</h2>
			<ul>
			<?php
				$args = array( 'numberposts' => '3' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
				}
			?>
			</ul>
		</div>
		<div class="copyright">
			<p>&copy; 1979 - <?php echo Date("Y"); ?> Ridge Meadows Speed Skating Association. All rights reserved. Site designed by <a href="http://thomasmclennan.ca">Thomas Mclennan</a>.</p>
		</div>
	</footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="/cdn/js/vendor/jquery-1.10.1.min.js"><\/script>')</script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.3/jquery.backstretch.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43870674-2', 'ridgemeadowsracers.com');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body></html>