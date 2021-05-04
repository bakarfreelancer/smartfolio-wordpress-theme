<?php
/**
 * The single page template file
 */
get_header();
?>
<div class="container">
    <div class="row py-2">
        <h1 class="pageHeading"><?php the_title( ); ?></h1>
        <main class="col-sm-9">
            <?php if(have_posts(  )): ?>
                <?php while(have_posts(  )) : the_post(  );?>
                    <p><?php echo the_content( );?></p>
                <?php endwhile;?>
            <?php endif;?>
        </main>

        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>
<?php get_footer(  );?>