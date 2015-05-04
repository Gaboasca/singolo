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
		            				<a class="item" data-filter='["web","graphic","art"]' href="#">
										<?php the_post_thumbnail('thumbnail'); ?>
										<img class="overlay-item" src="<?php bloginfo('template_url'); ?>/img/gallery/gal1.png" alt="">   
									</a>
							<?php endwhile; ?>













			              <!-- <a class="item" data-filter='["web","art"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal2.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal2.png" alt="">    
			              </a>
			              <a class="item" data-filter='["graphic","art"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal3.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal3.png" alt="">  
			              </a>
			              <a class="item" data-filter='["graphic"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal4.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal4.png" alt="">
			              </a>
			              <a class="item" data-filter='["art"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal5.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal5.png" alt="">
			              </a>
			              <a class="item" data-filter='["web"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal6.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal6.png" alt="">
			              </a>
			              <a class="item" data-filter='["art"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal7.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal7.png" alt="">
			              </a>
			              <a class="item" data-filter='["graphic","art"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal8.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal8.png" alt="">
			              </a>
			              <a class="item" data-filter='["web"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal9.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal9.png" alt="">
			              </a>
			              <a class="item" data-filter='["graphic"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal10.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal10.png" alt="">
			              </a>
			              <a class="item" data-filter='["web","graphic"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal11.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal11.png" alt="">
			              </a>
			              <a class="item" data-filter='["graphic"]' href="#">
			                <img class="category-item-thumbnail" src="resources/img/thumbnails/gal12.png" alt="" />
			                <img class="overlay-item" src="resources/img/gallery/gal12.png" alt="">
			              </a> -->
			            </div>
			          </div>				

        		</div>
      		</div>

<?php get_footer(); ?>



