<?php /* Template Name: Post Grid */ ?>
  
<?php
  get_header();
the_post();
?>

<section class="bannerSec">
      <div class="inner_page_banner" style="background:url(http://localhost/wordpress-6.3/wp-content/uploads/2023/08/about-header-bg.png) center center no-repeat; background-size:cover">
        <div class="container">
          <div class="page_heading">
                   <img src="http://localhost/wordpress-6.3/wp-content/uploads/2023/08/blogiconspace.png" alt="">
              
                   <div class="blog-title"><?php the_title(); ?></div>
                  
                   
          </div>
        </div>
      </div>
    </section>

    <section class="bodyContainer">
      
      <div class="inner_content_container">
        
      <div class="layout-container">
        
        <div class="container">
          
          <div class="row">
            
		   <div class="books-single">		
        	
				        <article id="post-5455" class="post-5455 post type-post status-publish format-standard has-post-thumbnail hentry category-devops">
                  
	<header class="entry-header stickyhead">		
  
				<h1 class="entry-title"><?php the_title(); ?></h1>
        
      
				
    </header><!-- .entry-header -->
	    <div class="entry-meta">
						<div class="post-details">
               <span class="post-date"><i class="fa fa-clock-o"></i> <span class="date"><time class="entry-date" datetime="2023-08-21T10:57:55+00:00">August 21, 2023</time></span></span>       
			   <span class="post-author"><i class="fa fa-user"></i>  <?php echo get_the_author(); ?></span>	
			   								    
			  </div> 			  
		</div><!-- .entry-meta -->
	
		<div class="entry-content">    
    	 		 <div class="entry-thumbnail">
       			<a href="<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');?>"><img width="604" height="314" src="<?php echo $img[0] ?>" class="attachment-large size-large wp-post-image" alt="System Initiative (SI) Is Now Free &amp; Open Source- Featured Image">	</a>
           
		</div>
		        
		<p><?php the_content(); ?></p>

		</div>
	</div>	
  <div id="sidebar">
  <?php
            $bookscat=get_terms([
              'taxonomy'=>'category',
              'hide_empty'=>false,
              'orderby'=>'name',
              'order'=>'ASC'
              // 'number'=>1
            ]);
            // print_r($bookscat);
          foreach($bookscat as $bookscatdata){   

         echo $meta_image =  ($bookscatdata->term_id);

            ?>
            
             
            
             <a href="<?php echo get_category_link($bookscatdata->term_id); ?>"><?php echo $bookscatdata->name;  ?></h3></a><h3>
             
             <?php } ?>
            
  <aside id="search-2" class="widget widget_search"> <div class="global-search"><?php dynamic_sidebar('sidebar'); ?></div></aside>
  <?php
    function jjycjn_display_link( $cat, $posts, $probs ){
        echo '<a href="'. get_category_link($cat->term_id) .'">'. $cat->name .'</a><span class="post_count"> ('. $posts->found_posts + $probs->found_posts .')</span>';
    }
?>
<aside class="widget widget_categories">
<h3 class="widget-title"><span class="widget-title-tab">Categories</span></h3>  
    <?php if( $categories = get_categories( array('parent' => 0, 'hide_empty' => 0, 'orderby' => 'term_order' ) ) ):
        echo '<ul>';
        foreach($categories as $cat):
            $cat_posts = new WP_Query( array( 'cat' => $cat->term_id, 'post_type' => 'post' ) );
            $cat_probs = new WP_Query( array( 'cat' => $cat->term_id, 'post_type' => 'movies' ) ); ?>
            <li class="cat-item"><?php jjycjn_display_link( $cat, $cat_posts, $cat_probs ); ?>
            <?php if( $sub_categories = get_categories( array('parent' => $cat->term_id, 'hide_empty' => 0, 'orderby' => 'term_order' ) ) ):
                echo '<ul class="children">';
                foreach($sub_categories as $sub_cat):
                    $sub_cat_posts = new WP_Query( array( 'cat' => $sub_cat->term_id, 'post_type' => 'post' ) );
                    $sub_cat_probs = new WP_Query( array( 'cat' => $sub_cat->term_id, 'post_type' => 'movies' ) ); ?>
                    <li class="cat-item"><?php jjycjn_display_link( $sub_cat, $sub_cat_posts, $sub_cat_probs ); ?>
                    <?php if( $sub_sub_categories = get_categories( array('parent' => $sub_cat->term_id, 'hide_empty' => 0, 'orderby' => 'term_order' ) ) ):
                        echo '<ul class="children">';
                        foreach ($sub_sub_categories as $sub_sub_cat):
                            $sub_sub_cat_posts = new WP_Query( array ( 'cat' => $sub_sub_cat->term_id, 'post_type' => 'post' ) );
                            $sub_sub_cat_probs = new WP_Query( array ( 'cat' => $sub_sub_cat->term_id, 'post_type' => 'movies' ) ); ?>
                            <li class="cat-item"><?php jjycjn_display_link( $sub_sub_cat, $sub_sub_cat_posts, $sub_sub_cat_probs ); ?>
                        <?php endforeach;
                        echo '</ul>';     
                        endif;
                    echo '</li>';     
                endforeach;
                echo '</ul>';   
                endif;
            echo '</li>';
        endforeach;
        echo '</ul>';
    endif; ?>
</aside>
    </div>			
</div><!-- .entry-content --> 			
		  </div>
      
        </div>
        </div>
      </div>
      
      <div class="post-navigation">
      <ul class="pager">
<?php
    $next_post = get_adjacent_post( false, '', false);
    $next_post_url = get_the_permalink($next_post);

    $previous_post = get_adjacent_post( false, '', true);
    $previous_post_url = get_the_permalink($previous_post);
?>
<li class="previous">
<a class="btn btn-primary btn-icon btn-icon-left" rel="prev" href="<?php echo $previous_post_url;?>">
<i class="fa fa-angle-left"></i>
Previous </a>
</li>
<li class="next">
<a class="btn btn-primary btn-icon btn-icon-right" rel="next" href="<?php echo $next_post_url;?>">
Next <i class="fa fa-angle-right"></i>
</a>
</li>
</ul>
</div>

  </section>


 

<?php get_footer(); ?>
