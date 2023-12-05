<?php
/*
Template Name: demo 
*/

?>
<?php
get_header();
?>
<?php
	$args = array(
        'post_type'=>'post',
        'paged'=>1,
    );

$the_query = new WP_Query( $args ); ?>
<div id="posts">
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
<?php endif; ?>
</div>

<button id="load_more">Load More...</button>
<?php
get_footer();
?>