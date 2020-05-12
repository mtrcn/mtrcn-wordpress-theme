<?php get_header(); ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
					
						<?php the_post_thumbnail('large'); ?>

						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
						<div class="post-meta">
							<?php the_time('m.d.Y'); ?> <?php echo get_the_tag_list( '| #', ' #' ); ?>
						</div>
						
						<div class="the-content">
							<?php the_content( 'Continue...' );
							?>
						</div>						
					</article>

				<?php endwhile; ?>
				
				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'newer' ); ?></div>
					<div class="next-page"><?php next_posts_link( 'older' ); ?></div>
				</div><!-- pagination -->


			<?php else : ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); ?>