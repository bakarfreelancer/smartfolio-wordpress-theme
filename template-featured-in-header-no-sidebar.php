<?php
/**
 * The  template file with featured image in header
 * Template name: Featured Image on top & no sidebar
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
    <?php if(have_posts(  )):?>
    <?php while(have_posts(  )):the_post(  );?>
        <article class="home-posts">
            <div class="singlePost mb-5">
                <div class="theExcerpt">
                    <?php echo the_content(  )?>
                </div>
                
            </div>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer( ); ?>