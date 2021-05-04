<?php
/**
 * The single project post template file
 */
get_header();
?>

<div class="container">
    <div class="row py-2">
        <main class="col-sm-9">
            <?php $current_cat=""; $current_post_title=""; $showRelated=false;?>
            <?php if(have_posts(  )):?>
            <?php 
                if(wp_get_post_terms(get_the_ID(  ), 'projectcategory' )){
                    $current_cat = wp_get_post_terms(get_the_ID(  ), 'projectcategory' )[0]->slug;
                    $current_post_title = get_the_title( );
                    $showRelated = true;
                }
            ?>
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
            <?php if($showRelated):?>
                <div class="relatedPosts">
                    <?php
                    $args = array(
                        'post_type'     => 'project',
                        'posts_per_page' => 4,
                        'projectcategory'      => $current_cat,
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts(  ) && sizeof($query->posts) > 1):
                        $counter = 0;
                        $display_fourth=false;
                    ?>
                        <h2 class="relatedPostHeading">Related Projects</h2>
                        <div class="row">
                            <?php while($query->have_posts(  )): $query->the_post(  );?>
                                <?php $counter += 1;?>
                                <?php if(get_the_title(  ) == $current_post_title):?>
                                    <?php $display_fourth=true;
                                    else:
                                    ?> 
                                    <?php if($counter == 4 && $display_fourth == false):exit; endif;?>
                                    <a href="<?php the_permalink( )?>" class="col-sm-4 col-xs-6 single">
                                        <img class="img-responsive" src="<?php the_post_thumbnail_url( 'img255by170' )?>">
                                        <h3 class="title text-center">
                                            <?php the_title(  )?>
                                        </h3>
                                    </a>
                            <?php endif; endwhile;?>
                        </div>
                    <?php  endif; wp_reset_postdata(  )?>
                </div>
            <?php endif;?>
        </main>
        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>

<?php get_footer( ); ?>