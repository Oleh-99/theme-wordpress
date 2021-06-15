<?php
/**
 * Comment.
 *
 * @package Minimo.
 */

?>
<div class="comments-wrapper">

	<div class="ol-comments-header" id="comment">
		<p class="ol-comment-reply-title">
			<?php if ( have_comments() ) : ?>
				<?php comments_number(); ?>
			<?php endif; ?>
		</p>

	</div>

	<?php
		wp_list_comments(
			array(
				'avatar_size' => 70,
				'style'       => 'div',
			)
		);

		if ( comments_open() ) {
			ob_start();

			get_template_part( 'template-parts/content', 'comment' );
			$cover_content = ob_get_contents();
			ob_end_clean();

			comment_form(
				array(
					'class_form'         => 'comments-wrapper',
					'title_reply'        => ' ',
					'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title">',
					'title_reply_after'  => '</h6>',
					'comment_field'      => $cover_content,
					'format'             => 'html5',
				)
			);
		}
		?>


</div>
