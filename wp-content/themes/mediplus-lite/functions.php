<?php

//custom logo add in the admin
add_theme_support('custom-header');
  
register_nav_menus(
    array('primary-menu'=>'Header Menu')
);

add_theme_support('post-thumbnails');



function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Movies', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Movies', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Movie', 'twentytwentyone' ),
            'all_items'           => __( 'All Movies', 'twentytwentyone' ),
            'view_item'           => __( 'View Movie', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Movie', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Movie', 'twentytwentyone' ),
            'update_item'         => __( 'Update Movie', 'twentytwentyone' ),
            'search_items'        => __( 'Search Movie', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'movies', 'twentytwentyone' ),
            'description'         => __( 'Movie news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies' => array( 'category', 'post_tag' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
            'post_per_page'=> 3,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'movies', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );

add_action( 'wp_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {

var page = 2;
var ajaxurl= "<?php echo admin_url('admin-ajax.php'); ?>";
        jQuery('#load_more').click(function(){

		var data = {
			'action': 'my_action',
			'page': page
		};

		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {
            jQuery('#posts').append(response);

			page++;
		});

    });
	});
	</script> <?php
}
  

add_action( 'wp_ajax_my_action', 'my_action' );

function my_action() {

    $args = array(
        'post_type'=>'post',
        'paged'=>$_POST['page'],
    );
    $the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
	
	<?php
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		?>
		<?php the_title( '<h2>', '</h2>' ); ?>
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif;
	wp_die(); // this is required to terminate immediately and return a proper response
}
?>