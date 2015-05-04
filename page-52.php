<?php get_header(); ?>

			<div class="second-section-bg page-wrap">
		        <div class="l-container l-container--spacing">
		        	<?php 
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>
							<h1 class="section__title section__title--primary"><?php the_title(); ?></h1>
							<p class="section__description section__description--primary"> <?php echo get_the_content(); ?>  </p>
						<?php endwhile;
					endif;?>

					<?php 
						$args = array('post_type' => 'services');
						$query = new WP_Query($args);
						while($query -> have_posts()) : $query -> the_post(); ?>
							<div class="section__block">
								<div class="section__block__avatar section__block__avatar--media">
								  <?php the_post_thumbnail('thumbnail'); ?>
								</div>
								<div class="section__block__info">
								  <h3 class="section__block__info__title"> <?php the_title(); ?> </h3>
								  <p class="section__block__info__description"> <?php echo get_the_content(); ?> </p>
								</div>
							</div> 
						<?php endwhile; ?>

        		</div>
      		</div>

<?php get_footer(); ?>



