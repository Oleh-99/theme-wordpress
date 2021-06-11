<footer class="footer-main">
	<div class="footer-general">
		<div class="container">
			<div class="footer-general-inner">
				<div class="row">
					<div class="col-sm-12 col-lg-3">
						<a href="index.html" class="logo-main">
							<?php if ( function_exists( 'the_custom_logo' ) ) {
								echo wp_get_attachment_image(
									get_theme_mod( 'custom_logo' ),
									'thumbnail',
									false,
									array(),
								);
							}
							?>
						</a>
						<p>Merak Fashion - Brand clothing and accessories store for women</p>
						<a href="#">
							<img src="<?php echo esc_html( get_template_directory_uri() ); ?>/assets/img/payment-metods.png" alt="">
						</a>
					</div>
					<div class="col-sm-12 col-md-6 offset-lg-1 col-lg-2">
						<div class="footer-link-wrapper">
							<ul class="footer-link">
								<li><a href="pages/about-us.html" class="link-hover-primary">About</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="pages/contact-us.html">Contact</a></li>
								<li><a href="#">FAQs</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="footer-link-wrapper">
							<ul class="footer-link">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Order tracking</a></li>
								<li><a href="#">Conditions</a></li>
								<li><a href="#">Support</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-lg-3">
						<div class="footer-about-us">
							<div class="tell">+453 211 41 38</div>
							<div class="address">Kongens Nytorv 13, 1095, København, Denmark</div>
							<div class="footer-social">
								<a href="#" class="link-hover-primary"><i class="fas fa-envelope"></i></a>
								<a href="#" class="link-hover-primary"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#" class="link-hover-primary"><i class="fab fa-twitter"></i></a>
								<a href="#" class="link-hover-primary"><i class="fab fa-instagram"></i></a>
								<a href="#" class="link-hover-primary"><i class="fab fa-telegram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyring">
		<div class="container">
			<?php
				bloginfo( 'name' );
				echo ' ' . date('Y');
			?>
			Created Name Studio
		</div>
	</div>
</footer>
<section class="to-top">
	<a href="#" class="link-hover"><i class="fas fa-arrow-up"></i><span>To top</span> </a>
</section>
<!--<div class="quick-view mfp-with-anim mfp-hide">-->
<!--	<div class="row">-->
<!--		<div class="col-md-12 col-lg-6">-->
<!--			<img src="--><?php //get_template_directory_uri(); ?><!--assets/img/products(compressed)/merak-product-3-0-min.jpg" alt="">-->
<!--		</div>-->
<!--		<div class="col-md-12 col-lg-6">-->
<!--			<div class="product-page-text">-->
<!--				<h3>Dress with a floral print</h3>-->
<!--				<div class="price">$142.50</div>-->
<!--				<p>Silent sir say desire fat him letter. Whatever settling goodness too and honoured she building answered her. Strongly thoughts remember.</p>-->
<!--				<div class="row">-->
<!--					<div class="col-sm-6">-->
<!--						<div class="sizes sizes-spacing">-->
<!--							<div class="name">Size</div>-->
<!--							<span class="not-available">S</span>-->
<!--							<span class="active">M</span>-->
<!--							<span>L</span>-->
<!--						</div>-->
<!--						<a href="#" class="size-guide link-hover"><i class="fal fa-ruler"></i> Size Guide</a>-->
<!--					</div>-->
<!--					<div class="col-sm-6">-->
<!--						<div class="sizes color">-->
<!--							<div class="name">Color</div>-->
<!--							<span class="active"><i class="fal fa-check"></i></span>-->
<!--							<span><i class="fal fa-check"></i></span>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<form class="add-to-card">-->
<!--					<input type="number">-->
<!--					<button class="button button-cart">Add to cart</button>-->
<!--					<button class="button button-product button-border"><i class="far fa-heart"></i></button>-->
<!--				</form>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<div class="sing-up mfp-with-anim mfp-hide">
	<h4><strong>SIGN IN</strong></h4>
	<form>
		<input type="text" placeholder="Login">
		<input type="password" placeholder="Password">
		<button>Sing up</button>
		<button>Register</button>
	</form>
</div>
<div class="shop-card mfp-with-anim mfp-hide">
	<h4><strong>SHOPPING CART</strong></h4>
	<a href="#" class="button button-medium">Add product</a>
</div>

<?php
wp_footer();
?>
</body>
</html>
