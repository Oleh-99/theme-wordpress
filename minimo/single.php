<?php
/**
 * Single.
 *
 * @package Minimo
 */

get_header();
?>
<section class="ol-content">
	<div class="container">
		<div class="ol-photo-single">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-9">
				<div class="ol-category">
					<?php the_category( ' ' ); ?>
				</div>
				<h2 class="ol-post-title">
					<?php the_title(); ?>
				</h2>
				<div class="ol-single-content">
					<?php the_content(); ?>
				</div>
				<?php comments_template(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php
get_footer();
