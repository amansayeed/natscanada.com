<?php 

function wpb_custom_new_menu() {
	register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );





  
function awesome_script_enqueue() {
	//css
    wp_enqueue_style('font', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '3.3.4', 'all');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '3.3.4', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '3.3.4', true);
	wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true);
	
}
add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');




  function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="sidecol">',
            'after_widget' => "</div>",
            'before_title' => '<div class="sidehead">',
            'after_title' => '</div>',
        )
    );

    register_sidebar(
        array (
            'name' => __( 'Custom2', 'your-theme-domain' ),
            'id' => 'custom-side-bar2',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="sidecol">',
            'after_widget' => "</div>",
            'before_title' => '<div class="sidehead">',
            'after_title' => '</div>',
        )
    );






}
add_action( 'widgets_init', 'my_custom_sidebar' );















add_theme_support( 'post-thumbnails' );








add_action( 'init', 'custom_post_type_func' );
function custom_post_type_func() {
    //posttypename = services
$labels = array(
'name' => _x( 'Services', 'services' ),
'singular_name' => _x( 'services', 'services' ),
'add_new' => _x( 'Add New', 'services' ),
'add_new_item' => _x( 'Add New services', 'services' ),
'edit_item' => _x( 'Edit services', 'services' ),
'new_item' => _x( 'New services', 'services' ),
'view_item' => _x( 'View services', 'services' ),
'search_items' => _x( 'Search services', 'services' ),
'not_found' => _x( 'No services found', 'services' ),
'not_found_in_trash' => _x( 'No services found in Trash', 'services' ),
'parent_item_colon' => _x( 'Parent services:', 'services' ),
'menu_name' => _x( 'Services', 'services' ),
);
$args = array(
'labels' => $labels,
'hierarchical' => true,
'description' => 'Hi, this is my custom post type.',
'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post',

);
register_post_type( 'services', $args );
}



register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-6 col-md-6 col-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<div class="footer-col">',
    'after_title' => '</div>',
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Area 2',
    'id' => 'footer-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="col-lg-6 col-md-6 col-sm-12">',
    'after_widget' => '</div>',
    'before_title' => '<div class="footer-col>',
    'after_title' => '</div>',
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Area 3',
    'id' => 'footer-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="lk-md-2">',
    'after_widget' => '</div>',
    'before_title' => '<div class="footer-col">',
    'after_title' => '</div>',
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Area 4',
    'id' => 'footer-4',
    'description' => 'Appears in the footer area',
    'before_widget' => '<div class="lk-md-3">',
    'after_widget' => '</div>',
    'before_title' => '<div class="footer-col">',
    'after_title' => '</div>',
    ) );


  
    function wpb_list_child_pages() { 

    
       
        $args = array(
                    
            //'posts_per_page' => -1,
            'post_type' => 'services', //you can use also 'any'
            'post_parent' => get_the_ID(72),
            );
        
        $the_query = new WP_Query( $args );
        // The Loop

        if ( !empty($the_query) ) {

            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <div class="lk-lg-9 lk-md-9 sm-md-9 lk-xs-4">
        
                <div class="navigation">
                <ul>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li>
                        </ul>
                        </div>
                        </div>
        
                        <?php
                        
                endwhile;
                endif;
           
          
        } else {?>
          
          <?php if ( $post->post_parent ) { ?>
 <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
    <?php echo get_the_title( $post->post_parent ); ?>
 </a>
<?php } ?>




      <?php  }
        // Reset Post Data
       // wp_reset_postdata();
    }
       
    
        add_shortcode('wpb_childpages', 'wpb_list_child_pages');



?>
























