<?php get_header(); ?>
	<?php
		$post_obj = $wp_query->get_queried_object();
		$slug = $post_obj->post_name;
		if ($slug == "home" || $slug == "cv")
		{
			$page_id = $slug;
		}
		else
		{
			$page_id = "blog";
		}
	?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			
			<div class="post">
				<?php edit_post_link('Edit this entry', '<p>', '</p>'); ?>
			</div>
			
	<?php endwhile; endif; ?>
	
	<p>
		<?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link('Newer Entries &raquo;') ?>
	</p>
	
</div><!-- /content-inner -->

<?php if ($page_id == "blog") : ?>
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- /sidebar -->
<?php endif; ?>


</div><!-- /content -->
</div><!-- /wrap-inner -->
</div><!-- /wrap -->

<?php get_footer(); ?>
