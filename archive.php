<?php
/**
 * The archive template file
 */
get_header();
?>

<div class="container">
    <div class="row py-2">
        <main class="col-sm-9">
            <?php if(have_posts(  )):?>
            <?php while(have_posts(  )):the_post(  );?>
                <article class="post_separator">
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
                            <?php the_excerpt(  )?>
                        </div>
                        
                    </div>
                </article>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="row py-2 text-center">
                        <h1 class="text-uppercase" style="font-size: 40px">No Posts Found</h1>
                        <br>
                        <a href="/" style="border:1px solid #000; display: block; width: fit-content; margin: auto; padding: 5px">BACK TO HOME</a>
                </div>
            <?php endif; ?>
            <div class="pagination">
                <?php echo paginate_links(  )?>
            </div>
        </main>
        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>

<?php get_footer( ); ?>