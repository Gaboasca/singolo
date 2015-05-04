<?php get_header(); ?>

			<div class="fifth-section-bg page-wrap">
		        <div class="l-container l-container--spacing">
		        	<?php 
					if( have_posts() ):
						while( have_posts() ): the_post(); ?>
							<h1 class="section__title section__title--secondary"><?php the_title(); ?></h1>
							<p class="section__description section__description--secondary"> <?php echo get_the_content(); ?>  </p>
						<?php endwhile;
					endif;?>

					<?php echo do_shortcode( '[contact-form-7 id="107" title="Contact form 1" html_id="contact-form-107" html_class="form"]' ); ?>

					<div class="contact">
			            <h3 class="section__block__info__title section__title--secondary">Contact Information</h3>
			            <p class="section__description section__description--secondary section__description--secondary--size">Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus. Proin sit amet volutpat libero. Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis.
			            <span class="section__description-icon section__description-icon-phone section__description-icon--spacing">Elm St. 14/05 Lost City</span>
			            <span class="section__description-icon section__description-icon-mail">03528 331 86 35</span>
			            <span class="section__description-icon section__description-icon-location">info&#64;singolo.com</span></p>
			        </div>

        		</div>
      		</div>

<?php get_footer(); ?>



