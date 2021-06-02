<?php get_header(); ?>

	<div class="main-wrapper">

		<article class="content px-3 py-5 p-md-5">
			<div class='container'>
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) :
						the_post();
						?>
						<div class="post mb-5">
							<div class="media">
								<?php
								the_post_thumbnail(
									'post-thumbnail',
									array(
										'class' => 'mr-3 img-fluid post-thumb d-none d-md-flex',
									)
								);
								?>
								<div class="media-body">
									<h3 class="title mb-1">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
									<div class="meta mb-1">
										<span class="date">Published
											<?php the_date(); ?>
										</span>
										<span class="comment">
											<a href="<?php the_permalink(); ?>#comment">
												<?php comments_number(); ?>
											</a>
										</span>
									</div>
									<div class="intro">
										<?php the_excerpt(); ?>
									</div>
									<a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
								</div><!--//media-body-->
							</div><!--//media-->
						</div>
						<a href=""></a>

						<?php
					endwhile;
				}
				?>
			</div>
			<?php the_posts_pagination(); ?>
		</article>
	</div>

<?php get_footer(); ?>
