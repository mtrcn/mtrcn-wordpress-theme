<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
        if ( have_comments() ) :
	?>
		<h2 class="comments-title"><?php echo get_comments_number(); ?> Comment(s):</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ol',
						'short_ping'  => true
					)
				);
			?>
		</ol>

    <?php
		the_comments_pagination();

	endif;

    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
		<p class="no-comments">Comments are closed.</p>
    <?php
        endif;
        comment_form();
	?>

</div><!-- #comments -->