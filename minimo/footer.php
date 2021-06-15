<?php
/**
 * Footer.
 *
 * @package Minimo
 */

?>
<footer class="ol-main-footer">
	<div class="container">
		<div class="ol-footer-inner">
			<?php
			wp_nav_menu(
				array(
					'container'  => '',
					'menu'       => 'Footer menu',
					'menu_class' => 'ol-footer-menu',
				)
			);
			?>
			<div class="ol-footer-link">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		</div>
	</div>
</footer>
<?php
wp_footer();

?>

</body>
</html>
