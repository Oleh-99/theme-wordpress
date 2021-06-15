<?php
/**
 * Header.
 *
 * @package Minimo
 */

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php
		wp_head();
	?>
</head>
<body>
	<header class="ol-main-header">
		<div class="container">
			<div class="ol-header-inner">
				<a href="#" class="ol-logo">
					<img src="<?php echo MINIMO_DIR_URI; ?>/assets/img/minimo.png" alt="">
				</a>
				<?php
				wp_nav_menu(
					array(
						'container'  => false,
						'menu'       => 'Header menu',
						'menu_class' => 'ol-main-menu',
					)
				);
				?>
			</div>
		</div>
	</header>

