<?php get_header(); ?>
	<?php /* Template Name: Slider */ ?>

	<div class="first-section-bg page-wrap">
        <div class="l-container l-container--spacing l-container--spacing--media l-container--relative">
        	<?php 
			if( have_posts() ):
				while( have_posts() ): the_post(); ?>
					<h1 class="section__title section__title--primary"><?php the_title(); ?></h1>
					<p class="section__description section__description--primary"> <?php echo get_the_content(); ?>  </p>
				<?php endwhile;
			endif;?>

			<div class="l-slider">
				<div class="buttons buttons--prev">
	              <a href="#" class="slider__button slider__button__prev" data-dir="prev"></a>
	            </div>

	            <div class="buttons buttons--next">
	              <a href="#" class="slider__button slider__button__next" data-dir="next"></a>
	            </div>
			
				<div class="slider">   
					<ul class="slider__wrap">
						<?php 
							$args = array('post_type' => 'slides');
							$query = new WP_Query($args);
							while($query -> have_posts()) : $query -> the_post(); ?>

					                <li class="slider__wrap__item">
					                  <div class="slider__wrap__item__content">
					                    <?php the_post_thumbnail('thumbnail'); ?>
					                  </div>
					                </li>
					              							            
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>



