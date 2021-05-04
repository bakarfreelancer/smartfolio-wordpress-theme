<?php
/**
 * The  template file is for displaying all projects
 * Template name: Projects Page
 */
get_header();
?>

    <div class="pageFeaturedHead" 
    style="
        background-image:
        linear-gradient(45deg, #00000087, #00000087), 
        url('<?php echo get_the_post_thumbnail_url( get_the_ID(  ), "full" );?>');">
        <h1 class="pageHeadingInFeatured">
            <?php the_title( )?>      
        </h1>
    </div>
    <div class="container">
    <div class="row py-2">
        <main class="col-sm-9">
            <?php
             $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                        'post_type'         => 'project',
                        'paged'             => $paged
                    );
            $query = new WP_Query($args);
            if($query->have_posts(  )):?>
            <?php while($query->have_posts(  )):$query->the_post(  );?>
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
                            <div class="postMeta">
                                <span class="author">
                                <i class="far fa-user"></i>
                                <?php the_author( )?>
                                </span>
                                <span class="time">
                                <i class="far fa-clock"></i>
                                <?php the_time( 'h:i A' )?>
                                </span>
                                <span class="date">
                                <i class="far fa-calendar-alt"></i>
                                <?php the_time( 'd M, Y' )?>
                                </span>
                            </div>
                        </div>
                        <div class="theBody">
                            <?php the_excerpt(  )?>
                        </div>
                        
                    </div>
                </article>
            <?php endwhile; ?>
                <?php 
                  if (function_exists("cpt_pagination")) {
                    cpt_pagination($query->max_num_pages); 
                 }
                ?>
            <?php else: ?>
                <div class="row py-2 text-center">
                        <h1 class="text-uppercase" style="font-size: 40px">No Projects Found</h1>
                        <br>
                        <a href="/" style="border:1px solid #000; display: block; width: fit-content; margin: auto; padding: 5px">BACK TO HOME</a>
                </div>
            <?php endif; wp_reset_postdata(  )?>
        </main>
        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>

<?php get_footer( ); ?>