<?php
get_header();
the_post();
?>
	<!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2><?php the_title(); ?></h2>
							<ul class="bread-list">
								<li><a href="<?php echo site_url(); ?>">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active"><?php the_title(); ?></li>
								
							</ul>
                             
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		<?php the_post_thumbnail(); ?>
        <div class="body-text">
                                <p><?php the_content(); ?></p>
								
                            </div> 
<?php
get_footer();
?>