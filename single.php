<?php
/**
 * The single post template file
 */
get_header();
?>

<div class="container">
    <div class="row py-2">
        <main class="col-sm-9">
        <?php $current_cat=""; $current_post_title;?>
            <?php if(have_posts(  )):?>
            <?php while(have_posts(  )):the_post(  );?>
            <?php $current_cat = get_the_category(get_the_ID() )[0]->slug;
            $current_post_title = get_the_title( );?>
                <article>
                    <div class="singlePost mb-5">
                        <div class="featuredImg">
                            <a href="<?php the_permalink( )?>">
                                <?php the_post_thumbnail( 'post-featured-full' );?>
                            </a>
                            <div class="postMeta">
                                <span class="category">
                                <i class="far fa-folder-open"></i>
                                    <?php the_category(  )?>
                                </span>
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
            <div class="relatedPosts">
                <?php
                $args = array(
                    'post_type'     => 'post',
                    'posts_per_page' => 4,
                    'category_name'      => $current_cat,
                );
                $query = new WP_Query($args);
                if($query->have_posts(  ) && sizeof($query->posts) > 1):
                    $counter = 0;
                    $display_fourth=false;
                ?>
                    <h2 class="relatedPostHeading">Related Posts</h2>
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
        </main>
        <aside class="col-sm-3">
            <?php get_sidebar(  );?>
        </aside>
    </div>
</div>

<?php get_footer( ); ?>