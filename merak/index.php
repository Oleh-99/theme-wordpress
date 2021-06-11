<?php get_header(); ?>

<section class="articles">
	<div class="container">
		<div class="block-title-center with-animated">
			<h6 class="sub-title">Clothes that you like</h6>
			<h2 class="title">Our <?php single_post_title(); ?></h2>
			<p>The clothes that you like. New collections of clothes for every taste for you and your family.</p>
		</div>
		<div class="row spacing-bottom-65 with-animated">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<div class="col-md-12 col-lg-4">
						<div class="articles-category">
							<div class="articles-category-foto">
								<?php
								the_post_thumbnail(
									'post-thumbnail',
									array(
										'sizes' => '573px, 206px',
									),
								);
								?>
								<span class="banner-category">
									<?php the_category( ' ', 'single' ); ?>
								</span>
							</div>
							<div class="articles-category-text">
								<h4>
									<a href="<?php the_permalink(); ?>" class="link-hover">
										<?php esc_html( the_title() ); ?>
									</a>
								</h4>
								<p class="excerpt">
									<?php echo esc_html( ol_get_the_excerpt( 150 ) ); ?>
								</p>
								<div class="articles-category-about">
									<span class="spacing-right">
										<?php echo get_the_date( 'M j, Y' ); ?>
									</span>
									<div class="articles-category-author spacing-right">
										<img src="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/merak-testimonials-3.jpg" alt="">
									</div>
									<span class="spacing-right"> By
										<span class="author-name">
											<?php the_author_posts_link(); ?>
										</span>
									</span>
								</div>
								<a href="<?php the_permalink(); ?>" class="link-hover">Continue reading <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<?php
				endwhile;
			else :
				?>
				<h3>
					<?php echo esc_html__( 'Not post', 'merak' ); ?>
				</h3>
					<?php
			endif;
			?>
		</div>
		<?php
		the_posts_pagination(
			array(
				'class' => 'page-numbers',
				'screen_reader_text' => ' ',
				'prev_text' => 'prev',
			)
		);
		?>
	</div>
</section>
<?php get_footer(); ?>
