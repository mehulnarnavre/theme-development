<?php
get_header();
?>
<section class="bannerSec">
      <div class="inner_page_banner" style="background:url(http://localhost/wordpress-6.3/wp-content/uploads/2023/08/about-header-bg.png) center center no-repeat; background-size:cover">
        <div class="container">
          <div class="page_heading">
                   <img src="http://localhost/wordpress-6.3/wp-content/uploads/2023/08/blogiconspace.png" alt="">
                  <div class="blog-title"><?php echo get_the_title(10); ?></div>
          </div>
        </div>
      </div>
    </section>
<section class="bodyContainer">
      <div class="inner_content_container">
      <?php if ( have_posts() ) { ?>
         
        <div class="book-container">
        <?php while ( have_posts() ) {
           the_post(); ?>
          <div class="row">
          <?php if ( has_post_thumbnail( get_the_ID() ) ) { ?>
		   <div class="blog_container">	
		  				<article id="post-5455" class="post-5455 post type-post status-publish format-standard has-post-thumbnail hentry category-devops">
	<header class="entry-header stickyhead">		
				<h4 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h4>
				
    </header><!-- .entry-header -->
	    <div class="entry-meta">
						<div class="post-details">
               <span class="post-date"><i class="fa fa-clock-o"></i> <span class="date"><time class="entry-date" datetime="2023-08-21T10:57:55+00:00"><?php echo get_the_date(); ?></time></span></span>       
			   <span class="post-author"><i class="fa fa-user"></i> <?php echo get_the_author(); ?></span>	
			   								    
			  </div> 			  
		</div><!-- .entry-meta -->
	
		<div class="entry-summary">
      		 <div class="entry-thumbnail">
        	<a href="<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');?>"><img width="300" height="156" src="<?php echo $img[0] ?>" class="attachment-medium size-medium wp-post-image" alt="System Initiative (SI) Is Now Free &amp; Open Source- Featured Image"></a>
		</div>
      <?php
                        $excerpt       = get_the_excerpt();
                        $excerpt       = substr( $excerpt, 0, 150 );
                        $short_excerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                        if ( ! empty( $short_excerpt ) ) { ?>
                           
                              <p>
                                 <?php echo esc_html( $short_excerpt ); ?>&hellip;</p>
                           
		      
<p><a class="read-more" href="<?php the_permalink();?>">Read More</a></p>

<?php } ?>
	</div><!-- .entry-summary -->
   <?php } ?>
   </div>
   <?php } ?>
        </div>
        <?php wp_reset_postdata();
         } else { ?>
            <div class="archived-posts"><?php echo esc_html__( 'No posts matching the query were found.', 'your-translate-domain' ); ?></div>
         <?php } ?>
      </div>
  </section>
<?php
get_footer(); ?>

