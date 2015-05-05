
			<footer class="header-footer-bg footer site-footer">
				<div class="l-container l-container--relative l-container--media">
					<div class="l-logo">
			          <h4 class="copywrite">&#64; Copyright 2013 · by PSDchat.com</h4>
			        </div>
			        <div class="l-social-media l-social-media--media">

			        	<?php 
						$args = array('post_type' => 'media');
						$query = new WP_Query($args);
						while($query -> have_posts()) : $query -> the_post(); ?>
							<a class="social-media" href="<?php echo get_the_content(); ?>">
					            <?php the_post_thumbnail('thumbnail'); ?>
					        </a>
						<?php endwhile; ?>   

			        </div>
				</div>
			</footer>

		<?php wp_footer(); ?>
	</body>
</html>