<?php
/*
Template Name: CV
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			
			<?php the_content(); ?>
			
		<?php endwhile; ?>
		
	<?php endif; ?>
	
</div><!-- /content-inner -->
</div><!-- /content -->
</div><!-- /wrap-inner -->
</div><!-- /wrap -->

<?php get_footer(); ?>
