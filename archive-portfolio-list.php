<?php get_header(); ?>
	<?php /* Template Name: Portfolio */ ?>
	
	<div class="third-section-bg page-wrap">
        <div class="l-container l-container--spacing">
        	<?php 
			if( have_posts() ):
				while( have_posts() ): the_post(); ?>
					<h1 class="section__title section__title--primary"><?php the_title(); ?></h1>
					<p class="section__description section__description--primary"> <?php echo get_the_content(); ?>  </p>
				<?php endwhile;
			endif;?>

			<div class="gallery">
	            <div class="gallerywrap">
	              <a class="filter category-buttons active" data-rel="all" href="#">All</a>
	              <a class="filter category-buttons " data-rel="web" href="#">Web Design</a>
	              <a class="filter category-buttons " data-rel="graphic" href="#">Graphic Design</a>
	              <a class="filter category-buttons " data-rel="art" href="#">Artwork</a>
	            </div>
	            <div class="category-wrap">
					<div class="img-overlay"></div>

					<?php 						 
						$args = array('post_type' => 'projects');
						$query = new WP_Query($args);
						while($query -> have_posts()) : $query -> the_post(); ?>

							<?php 
								$terms = wp_get_post_terms( $post->ID, 'gallery_category', array("fields" => "slugs") ); 
								$terms_space_implode = implode('","', $terms);
							?>

            				<a class="item" data-filter='<?php echo "[".'"'.$terms_space_implode.'"'."]"; ?>' href="#">
								<?php the_post_thumbnail('thumbnail'); ?>
								<div class="overlay-content">
									<div class="overlay-image-close">X</div>
									<?php the_post_thumbnail('thumbnail'); ?>  
									<div class="overlay-image-title"></div>
								</div>
							</a>

					<?php endwhile; ?>

	            </div>
	          </div>				

		</div>
		</div>

<?php get_footer(); ?>



