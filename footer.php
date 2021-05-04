<?php
/**
 * The footer of theme
 */
?>
	<footer id="fh5co-footer">
		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="fas fa-arrow-up"></i></a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<?php dynamic_sidebar( 'footer-widget-one' )?>
				</div>

				<div class="col-md-2 col-sm-6">
				<?php dynamic_sidebar( 'footer-widget-two' )?>
				</div>
				
				<div class="visible-sm-block clearfix"></div>

				<div class="col-md-2 col-sm-6">
				<?php dynamic_sidebar( 'footer-widget-three' )?>
				</div>
				<div class="col-md-2 col-sm-6">
				<?php dynamic_sidebar( 'footer-widget-four' )?>
				</div>
			</div>

			<div class="row fh5co-row-padded fh5co-copyright">
				<div class="col-md-5">
					<p><small><?php echo get_theme_mod( 'footer_textarea', 'Theme: <a href="https://github.com/bakarfreelancer" target="_blank">Smartfolio</a> | Powered by: <a href="https://wordpress.org" target="_blank">WordPress</a>' )?></small></p>
				</div>
			</div>
		</div>
	</footer>	
</body>

<?php wp_footer(  );?>
</html>