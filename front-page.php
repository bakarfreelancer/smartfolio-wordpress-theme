<?php get_header( );?>		
<?php if ( true == get_theme_mod( 'slider_switch_setting', true ) ) : ?>
	<div class="fh5co-slider" style="margin-top:-60px">
		<div class="owl-carousel owl-carousel-fullwidth">
			<?php $image = get_theme_mod( 'sl1-image_setting_url', get_template_directory_uri(  ).'/assets/images/slide_1.jpg' ); ?>
		    <div class="item" 
				style="background-image: url('<?php echo esc_url( $image ); ?>')">
		    	<div class="fh5co-overlay" 
				style="background:<?php echo get_theme_mod( 'sl1_color_setting_hex', 'rgba(0,0,0,0.3)' );?>
				"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">
									<?php echo get_theme_mod( 's1_heading', 'Slider One Heading' ) ?>
									</h1>
									<h2 class="fh5co-sub-lead">
										<?php echo get_theme_mod( 's1_textarea', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.' ) ?>
									</h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>

			<?php $image = get_theme_mod( 'sl2-image_setting_url', get_template_directory_uri(  ).'/assets/images/slide_2.jpg' ); ?>
		    <div class="item" 
				style="background-image: url('<?php echo esc_url( $image ); ?>')">
		    	<div class="fh5co-overlay" 
				style="background:<?php echo get_theme_mod( 'sl2_color_setting_hex', 'rgba(0,0,0,0.3)' );?>
				"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">
									<?php echo get_theme_mod( 's2_heading', 'Slider Two Heading' ) ?>
									</h1>
									<h2 class="fh5co-sub-lead">
										<?php echo get_theme_mod( 's2_textarea', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.' ) ?>
									</h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>

			<?php $image = get_theme_mod( 'sl3-image_setting_url', get_template_directory_uri(  ).'/assets/images/slide_3.jpg' ); ?>
		    <div class="item" 
				style="background-image: url('<?php echo esc_url( $image ); ?>')">
		    	<div class="fh5co-overlay" 
				style="background:<?php echo get_theme_mod( 'sl3_color_setting_hex', 'rgba(0,0,0,0.3)' );?>
				"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">
									<?php echo get_theme_mod( 's3_heading', 'Slider Three Heading' ) ?>
									</h1>
									<h2 class="fh5co-sub-lead">
										<?php echo get_theme_mod( 's3_textarea', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.' ) ?>
									</h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>	
<?php endif; ?>

<div id="fh5co-main">

	<?php if ( true == get_theme_mod( 'features_switch', true ) ) : ?>
			<!-- Features -->
			<div id="fh5co-features">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="fh5co-section-lead">
								<?php echo get_theme_mod('f_heading', "Featured Heading")?>
							</h2>
							<h3 class="fh5co-section-sub-lead">
								<?php echo get_theme_mod('f_textarea', "Feature paragraph text will goes here.")?>
							</h3>
						</div>
						<div class="fh5co-spacer fh5co-spacer-md"></div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 fh5co-feature-border">
							<div class="fh5co-feature">
								<div class="fh5co-feature-icon to-animate">
									<i class="<?php echo get_theme_mod('f1_icon', "fab fa-wordpress")?>"></i>
								</div>
								<div class="fh5co-feature-text">
									<h3><?php echo get_theme_mod('f1_heading', "Highly Cusomizable")?></h3>
									<p><?php echo get_theme_mod('f1_textarea', "Far far away, behind the word mountains, far from the countries Vokalia.")?></p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-feature-icon to-animate">
									<i class="<?php echo get_theme_mod('f2_icon', "far fa-check-square")?>"></i>
								</div>
								<div class="fh5co-feature-text">
									<h3><?php echo get_theme_mod('f2_heading', "Voice Recording")?></h3>
									<p><?php echo get_theme_mod('f2_textarea', "Far far away, behind the word mountains, far from the countries Vokalia.")?></p>
								</div>
							</div>
							
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="fh5co-feature">
								<div class="fh5co-feature-icon to-animate">
									<i class="<?php echo get_theme_mod('f3_icon', "far fa-user")?>"></i>
								</div>
								<div class="fh5co-feature-text">
									<h3><?php echo get_theme_mod('f3_heading', "User Satisfaction")?></h3>
									<p><?php echo get_theme_mod('f3_textarea', "Far far away, behind the word mountains, far from the countries Vokalia.")?></p>
								</div>
							</div>

							<div class="fh5co-feature">
								<div class="fh5co-feature-icon to-animate">
									<i class="<?php echo get_theme_mod('f4_icon', "far fa-clock")?>"></i>
								</div>
								<div class="fh5co-feature-text">
									<h3><?php echo get_theme_mod('f4_heading', "24/7 Support")?></h3>
									<p><?php echo get_theme_mod('f4_textarea', "Far far away, behind the word mountains, far from the countries Vokalia.")?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Features -->
			<div class="fh5co-spacer fh5co-spacer-lg"></div>		
	<?php endif;?>

	<!-- Products (Projects) -->
	<div class="container" id="fh5co-products">
		<div class="row text-left">
			<div class="col-md-8">
				<h2 class="fh5co-section-lead"><?php echo get_theme_mod( 'projects_heading', 'Our Projects' ) ?></h2>
				<h3 class="fh5co-section-sub-lead"><?php echo get_theme_mod( 'projects_textarea', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.' )?></h3>
			</div>
			<div class="fh5co-spacer fh5co-spacer-md"></div>
		</div>
		<div class="row">
			<?php $args = array(
				'post_type'	=> 'project',
				'posts_per_page'	=> 4,
			);
			$query = new WP_Query($args);
			if($query->have_posts(  )):
				while($query->have_posts(  )): $query->the_post(  );?>
			<div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12 fh5co-mb30">
				<a class="d-block" href="<?php the_permalink( )?>" class="fh5co-product">
					<img style="margin-left:auto; margin-right: auto;" src="<?php echo get_the_post_thumbnail_url( $query->the_ID(  ),'img255by170')?>" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
					<h4 class="text-center text-uppercase"><?php the_title(  )?></h4>
				</a>
			</div>
			<?php 
				endwhile; 
			endif;
			wp_reset_postdata();
			?>
			<div class="visible-sm-block visible-xs-block clearfix"></div>
		</div>
	</div>
	<!-- Products (Projects) -->

	<!-- SERVICES STARTS -->
	<div id="fh5co-project">
		<div class="fh5co-spacer fh5co-spacer-lg"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><?php echo get_theme_mod( 'services_heading', 'Our Services' )?></h2>
					<p><?php echo get_theme_mod( 'services_textarea', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, unde beatae. Maiores quis suscipit corporis facilis laboriosam praesentium ad.' )?></p>
				</div>
			</div>
		</div>
		<div class="project-content">
			<div class="container">
				<?php $args = array(
						'post_type'	=> 'service',
						'posts_per_page'	=> 4,
					);
					$query = new WP_Query($args);
					if($query->have_posts(  )):
						while($query->have_posts(  )): $query->the_post(  );?>
						<div class="col-forth">
							<div class="project animate-box" style="background-image:url(<?php the_post_thumbnail_url( 'medium' )?>);">
								<a href="<?php the_permalink(  )?>" class="desc">
									<span><?php echo get_post_meta( get_the_ID(), 'details_price', true )?></span>
									<h3><?php the_title( )?></h3>
								</a>
							</div>
						</div>
						<?php endwhile;?>
					<?php endif; wp_reset_postdata( )?>
			</div>
		</div>
		<div class="fh5co-spacer fh5co-spacer-lg"></div>
	</div>
	<!-- SERVICES ENDS -->

	<?php if ( true == get_theme_mod( 'clients_switch_setting', true ) ) : ?>
		<div id="fh5co-clients">
			<div class="container">
				<div class="row">
					<?php $image1 = get_theme_mod( 'cl1_img', get_template_directory_uri(  ).'/assets/images/client_1.png' ); ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="<?php echo esc_url( $image1 )?>"  class="img-responsive"></div>
					<?php $image2 = get_theme_mod( 'cl2_img', get_template_directory_uri(  ).'/assets/images/client_2.png' ); ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="<?php echo esc_url( $image2 )?>" class="img-responsive"></div>
					<div class="visible-sm-block visible-xs-block clearfix"></div>
					<?php $image3 = get_theme_mod( 'cl3_img', get_template_directory_uri(  ).'/assets/images/client_3.png' ); ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="<?php echo esc_url( $image3 )?>" class="img-responsive"></div>
					<?php $image4 = get_theme_mod( 'cl4_img', get_template_directory_uri(  ).'/assets/images/client_4.png' ); ?>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="<?php echo esc_url( $image4 )?>" class="img-responsive"></div>
				</div>
			</div>
		</div>
	<?php endif;?>

</div>

<?php get_footer( );?>