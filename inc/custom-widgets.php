<?php
// Creating the widget 
class sf_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'sf_widget', 
      
    // Widget name will appear in UI
    __('Recent Projects', 'sf_widget_domain'), 
      
    // Widget description
    array( 'description' => __( 'Display recent projects', 'sf_widget_domain' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    // This is where you run the code and display the output
    ?>
        <ul class="fh5co-post">
            <?php
            $argsQ = array(
                'post_type'	=> 'project',
                'posts_per_page'	=> 4,
            );
            $query = new WP_Query($argsQ);
            if($query->have_posts(  )):
                while($query->have_posts(  )): $query->the_post(  );?>
                <li>
                    <a href="<?php the_permalink( );?>">
                        <div class="fh5co-post-media"><img src="<?php the_post_thumbnail_url( 'img255by170' );?>" ></div>
                        <div class="fh5co-post-blurb">
                            <?php the_title( );?>
                            <span class="fh5co-post-meta"><?php the_time( 'd M, Y' );?></span>
                        </div>
                    </a>
                </li>
            <?php endwhile; endif; wp_reset_postdata(  );?>
            <!-- <li>
                <a href="#">
                    <div class="fh5co-post-media"><img src="/images/slide_3.jpg" alt="FREEHTML5.co Free HTML5 Template"></div>
                    <div class="fh5co-post-blurb">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        <span class="fh5co-post-meta">Oct. 12, 2015</span>
                    </div>
                </a>
            </li> -->
        </ul>
            
    <?php
    echo $args['after_widget'];
    }//Public function widget end
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Recent Projects', 'sf_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }//public function form end
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class sf_widget ends here
};

// Creating the widget 
class sf_widget_services extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'sf_widget_services', 
      
    // Widget name will appear in UI
    __('Recent Services', 'sf_widget_domain'), 
      
    // Widget description
    array( 'description' => __( 'Display recent services', 'sf_widget_domain' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    // This is where you run the code and display the output
    ?>
        <ul class="fh5co-post">
            <?php
            $argsQ = array(
                'post_type'	=> 'service',
                'posts_per_page'	=> 4,
            );
            $query = new WP_Query($argsQ);
            if($query->have_posts(  )):
                while($query->have_posts(  )): $query->the_post(  );?>
                <li>
                    <a href="<?php the_permalink( );?>">
                        <div class="fh5co-post-media"><img src="<?php the_post_thumbnail_url( 'img255by170' );?>" ></div>
                        <div class="fh5co-post-blurb">
                            <?php the_title( );?>
                            <span class="fh5co-post-meta"><?php the_time( 'd M, Y' );?></span>
                        </div>
                    </a>
                </li>
            <?php endwhile; endif; wp_reset_postdata(  );?>
        </ul>
            
    <?php
    echo $args['after_widget'];
    }//Public function widget end
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Recent Services', 'sf_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }//public function form end
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class sf_widget_services ends here
};

     
// Register and load the widget
function sf_load_widget() {
    register_widget( 'sf_widget' );
    register_widget( 'sf_widget_services' );
}
add_action( 'widgets_init', 'sf_load_widget' );
