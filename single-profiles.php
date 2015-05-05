<?php get_header(); ?>

			<div class="fourth-section-bg page-wrap">
		        <div class="l-container l-container--spacing">
		        	<div class="section__block-aside">
		        		<div class="section__block__avatar section__block__avatar--primary">
			              <?php the_post_thumbnail('thumbnail'); ?>
			            </div>
			            <h3 class="section__block__info__title section__block__info__title--single section__block__info__title--single-profiles"> <?php the_title(); ?> </h3>
			            <div class="l-navigation l-navigation--section l-social-media l-social-media--single">

			              <a class="social-media social-media--primary" href="https://www.facebook.com/">
			                <img class="social-media__img" src="<?php bloginfo('template_url'); ?>/img/facebook.png" alt="mediaImg">
			              </a>
			              <a class="social-media social-media--primary" href="https://plus.google.com/">
			                <img class="social-media__img" src="<?php bloginfo('template_url'); ?>/img/google.png" alt="mediaImg">
			              </a>
			              <a class="social-media social-media--primary" href="https://twitter.com/">
			                <img class="social-media__img" src="<?php bloginfo('template_url'); ?>/img/twitter.png" alt="mediaImg">
			              </a>
			              <a class="social-media social-media--primary" href="https://www.linkedin.com/uas/login">
			                <img class="social-media__img" src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt="mediaImg">
			              </a>
			            </div>
			        </div>
					<div class="section__block section__block--primary section__block--primary-single">
			            <div class="section__block__info section__block__info--primary">
			              <h3 class="section__block__info__title section__block__info__title--single"> <?php the_title(); ?> </h3>
			              <p class="section__block__info__description section__block__info__description--single"> <?php echo $post->post_content; ?> </p>
			            </div>
			        </div>
				</div>
		    </div>

<?php get_footer(); ?>




							