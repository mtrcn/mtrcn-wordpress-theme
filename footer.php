</main>

<footer class="site-footer">
	<div class="site-info container">

	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="social-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .social-navigation -->
	<?php endif; ?>
		
		<p>&copy; <?php echo date("Y"); ?></p>
		
	</div>
</footer>

<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js" type="text/javascript"></script>
</body>
</html>
