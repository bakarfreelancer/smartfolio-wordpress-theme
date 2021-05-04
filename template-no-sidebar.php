<?php
/**
 * The  template for page with full width
 * Template name: No Sidebar
 */
get_header();
?>

<div class="container">
    <?php if(have_posts(  )): ?>
        <?php while(have_posts(  )) : the_post(  );?>
            <h1 class="pageHeading"><?php the_title( ); ?></h1>
            <p><?php echo the_content( );?></p>
        <?php endwhile;?>
    <?php endif;?>
</div>
<?php get_footer(  );?>