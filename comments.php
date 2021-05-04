<?php
/**
 * The comments template file
 */
get_header();
?>

<div class="container">
    <div class="row py-2">
        <main class="col-sm-9">
            <?php if(have_posts(  )):?>
            <?php while(have_posts(  )):the_post(  );?>
                <article>
                    <div class="singlePost mb-5">
                        <div class="featuredImg">
                            <a href="<?php the_permalink( )?>">
                                <?php the_post_thumbnail( 'post-featured-full' );?>
                            </a>
                            <h2 class="title bg-dark p-3 ">
                                <a href="<?php the_permalink( )?>" class="text-white text-decoration-none">
                                    <?php the_title( )?>
                                </a>
                            </h2>
                        </div>
                        <div class="theBody">
                            <?php the_content(  )?>
                        </div>
                        
                    </div>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </main>
        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>

<?php get_footer( ); ?>