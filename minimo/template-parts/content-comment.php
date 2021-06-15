<?php
/**
 * Create comment.
 *
 * @package Minimo.
 */

?>
<div class="ol-comment-create">
	<div class="ol-comment-avatar">
		<?php echo get_avatar( $comment, 70 ); ?>
	</div>
	<textarea name="comment" id="comment" cols="30" rows="2" placeholder="Join the discussion" aria-label="Add comment"></textarea>
</div>
