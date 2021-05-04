<?php
/**
 * The header of theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head( );?>
    <!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(  );?>/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class( )?>>
    <header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header"> 
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<?php if(has_custom_logo(  )):?>
							<p>
								<?php the_custom_logo( );?>
							</p>
					<?php else : ?>
						<a class="navbar-brand" href="<?php bloginfo( 'url' )?>">
							<?php bloginfo( 'title' ); ?>
						</a>
					<?php endif; ?>
				</div>
				<?php wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container_id'	=> 'fh5co-navbar',
						'container_class'	=> 'navbar-collapse collapse',
						'menu_class'		=> 'nav navbar-nav navbar-right',
						) );
				?>
			</div>
		</nav>
	</header>
	<div style="height:68px"></div>
	<!-- END .header -->
