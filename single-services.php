<?php get_header(); ?>

			<div class="second-section-bg page-wrap">
		        <div class="l-container l-container--spacing">
					<div class="section__block section__block--single">
						<div class="section__block__avatar section__block__avatar--media section__block__avatar--single">
						  <?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="section__block__info section__block__info--single">
						  <h3 class="section__block__info__title section__block__info__title--single"> <?php the_title(); ?> </h3>
						  <p class="section__block__info__description section__block__info__description--single"> <?php echo $post->post_content; ?> </p>
						</div>
					</div> 
				</div>
			</div>

<?php get_footer(); ?>



