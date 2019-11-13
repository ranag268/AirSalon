<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
		</div><!-- #content -->
		<footer id="colophon" class="site-footer pb-3" role="contentinfo" style="
    min-height: 190px;
">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-3 h-125 text-center">
						<img class="header-img" src="<?php echo includes_url('images/logo_white.png'); ?>" style="height: 125px;" alt="">
					</div>
					<div class="col-12 col-md-9">
						<div class="footer-links">
							<a href="">DELIVERY</a>
							<a href="">ABOUT</a>
							<a href="">ETHICS</a>
							<a href="">LOCATION</a>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="<?php echo includes_url('js/bootstrap.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.1.0/dist/lazyload.min.js"></script>
<script>
	window.onscroll = function() {myFunction()};

	var header = document.getElementById("header");
	var sticky = header.offsetTop;

	function myFunction() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	}

</script>
</body>
</html>
