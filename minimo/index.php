<?php
/**
 * Index.
 *
 * @package Minimo
 */

get_header();
?>
<section class="ol-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-9">
				<div class="row ol-wrapper-posts">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : ?>
							<?php the_post(); ?>
							<div class="col-md-12 col-lg-6">
								<div class="ol-photo-post">
									<a href="<?php the_permalink(); ?>">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail(); ?>
										<?php else : ?>
											<img src="<?php echo esc_attr( MINIMO_DIR_URI ); ?>/assets/img/default-img.png" alt="">
										<?php endif; ?>
									</a>
								</div>
								<div class="ol-category">
									<?php the_category( ' ' ); ?>
								</div>
								<h2 class="ol-post-title">
									<a href="<?php the_permalink(); ?>">
										<?php esc_html( the_title() ); ?>
									</a>
								</h2>
								<div class="ol-excerpt">
									<?php echo esc_html( ol_get_the_excerpt() ); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<h2>Not posts</h2>
					<?php endif; ?>
				</div>
				<?php
				the_posts_pagination(
					array(
						'class'              => 'page-numbers',
						'prev_next'          => false,
						'screen_reader_text' => ' ',
					)
				);
				?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php
get_footer();
