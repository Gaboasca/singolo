<?php get_header(); ?>
			
			<?php 
			if( have_posts() ):
				while( have_posts() ): the_post(); ?>

					<?php get_template_part('content',get_post_format()); ?>
					<?php $gtc = get_the_content(); echo $gtc; ?>

				<?php endwhile;
			endif;?>

<?php get_footer(); ?>