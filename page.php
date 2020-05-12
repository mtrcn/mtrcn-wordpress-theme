<?php
	get_header();
?>
	<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">
				
					<h1><?php the_title(); ?></h1>
					
					<div class="the-content">
						<?php the_content(); ?>
						
						<?php wp_link_pages(); ?>
					</div><!-- the-content -->
					
				</article>

			<?php endwhile; ?>

		<?php else : ?>
			
			<article class="post error">
				<h1 class="404">Nothing posted yet</h1>
			</article>

		<?php endif; ?>

	</div><!-- #content .site-content -->
<?php get_footer(); ?>