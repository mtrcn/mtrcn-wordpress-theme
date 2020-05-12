<?php get_header(); ?>
	<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">
				
					<h1 class="post-title"><?php the_title(); ?></h1>
					<div class="post-meta">
						<?php the_time('m.d.Y'); ?> <span class="tags"><?php echo get_the_tag_list( '| #', ' #' ); ?></span>			
					</div>
					
					<div class="the-content">
						<?php the_content(); ?>
						
						<?php wp_link_pages(); ?>
					</div>						
				</article>

			<?php endwhile; ?>
			
			<?php					
				if ( comments_open() || '0' != get_comments_number() )
					comments_template( '', true );
			?>

		<?php else : ?>
			
			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>

		<?php endif; ?>

	</div><!-- #content .site-content -->
<?php get_footer(); ?>
