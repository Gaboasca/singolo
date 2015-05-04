<?php get_header(); ?>

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

		            				<a class="item" data-filter='' href="#">
										<?php the_post_thumbnail('thumbnail'); ?>
										<div class="overlay-content">
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



