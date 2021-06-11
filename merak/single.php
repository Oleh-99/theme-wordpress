<?php

get_header();

$hide_title = get_post_meta( get_the_ID(), '_hide-page-title', true );
?>
<section class="view-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-3">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<div class="col-md-12 col-lg-9">
				<div class="articles-category-text">
					<?php if ( 'true' === $hide_title ) : ?>
					<h3>
						<?php esc_html( the_title() ); ?>
					</h3>
					<?php endif; ?>
					<div class="articles-category-about">
				<span class="spacing-right">
					<?php echo get_the_date( 'M j, Y' ); ?>
				</span>
						<div class="articles-category-author spacing-right">
							<img src="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/merak-testimonials-3.jpg" alt="">
						</div>
						<span class="spacing-right"> By
			<span class="author-name">
				<?php the_author(); ?>
			</span>
		</span>
					</div>
					<div class="content">
						<?php the_content(); ?>
					</div>
					<div>
						<?php
						wp_link_pages(
							array(
								'class' => 'page-numbers',
							)
						);
						?>
					</div>
				</div>
				<div class="post-link">
			<span>
				<?php previous_post_link( '%link' ); ?>
			</span>
					<span>
				<?php next_post_link( '%link' ); ?>
			</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
