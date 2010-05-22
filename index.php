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
	
	<div id="main">
		<?php if (have_posts()) : ?>
			
			<?php $first = true; ?>
			
			<?php while (have_posts()) : the_post(); ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
				<div class="post" id="post-<?php the_ID(); ?>">
					<p class="meta"><?php the_time('F jS, Y') ?> by <strong><?php the_author() ?></strong></p>

					<?php the_content('Read the rest of this entry &raquo;'); ?>

					<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
				
				<?php if ($first) { $first = false; } ?>
			<?php endwhile; ?>
			
			<p
				<?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link('Newer Entries &raquo;') ?>
			</p>
		
		<?php else : ?>

			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>

		<?php endif; ?>
	</div><!-- /main -->
</div><!-- /content-inner -->
	
<div id="sidebar">
	<?php get_sidebar(); ?>
</div><!-- /sidebar -->

</div><!-- /content -->
</div><!-- /wrap-inner -->
</div><!-- /wrap -->

<?php get_footer(); ?>
