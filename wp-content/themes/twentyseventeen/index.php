<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2 mb-4">
				<h5 class="light-green mb-5 text-center">THE <img src="<?php echo includes_url('images/Logo_transparent.png') ?>" style="height: 130px;" alt=""> WAY</h5>
				<p class="large-text light-green mb-1">
					INSPIRING YOU TO SHOP MORE ETHICALLY AND SUSTAINABLY, 
				</p>
				<p class="large-text light-green mb-5">
					WE INVITE YOU TO JOIN OUR COMMUNITY TO SHARE IN THE LOVE OF WELLBEING,
				</p>
				<p class="large-text light-green">
				IT STARTS WITH ENSURING YOU TAKE TIME TO BREATHE
				</p>
			</div>
			<div class="col-12 col-md-4">
				<div class="intro-image" style="height: 400px; width: 94%; margin: 0 3%; background-image: url(<?php echo includes_url('images/img1.png'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
					<div>
						<a href="" class="btn btn-custom">
							Take me there
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 md-hidden">
				<div class="intro-image" style="height: 400px; width: 94%; margin: 0 3%; background-image: url(<?php echo includes_url('images/img2.png'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
					<div>
						<a href="" class="btn btn-custom">
							Take me there
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 md-hidden">
				<div class="intro-image" style="height: 400px; width: 94%; margin: 0 3%; background-image: url(<?php echo includes_url('images/img3.png'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center center;">
					<div>
						<a href="" class="btn btn-custom">
							Take me there
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4 pt-4">
			<div class="col-12 col-md-4 offset-md-1 text-center">
				<img src="<?php echo includes_url('images/pour-bottle.gif'); ?>" alt="" style="width: 90%; z-index: -2;">
			</div>
			<div class="col-12 col-md-4 offset-md-1 mt-4 mt-md-0">
				<div class="section-tit">
				AIRSUPPLY
				</div>
				<div class="section-desc">
					We supply conscious, ethically & responsibly sourced products. Refills available on selected products in the Davines range
				</div>
				<div class="section-btns mb-4 md-md-0">
					<a href="shop" class="btn btn-custom mb-3">
						SHOP						
					</a>
					<a href="shop" class="btn btn-custom mb-3">
						REFILLS						
					</a>
				</div>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row mt-4 pt-4">
			<div class="col-12 col-md-4 order-2 order-md-1 offset-md-2  mt-4 mt-md-0">
				<div class="section-tit">
					AIRCREW
				</div>
				<div class="section-desc">
					The AIRcrew are hand picked organisations we believe in; run by people who are aligned to our values
				</div>
				<div class="section-btns mb-4 md-md-0">
					<a href="<?php echo site_url('/air-crew'); ?>" class="btn btn-custom">
						JOIN US
					</a>
				</div>
			</div>
			<div class="col-12 col-md-4 order-1 order-md-2">
				<img src="<?php echo includes_url('images/pot.png'); ?>" alt="" style="width: 90%; z-index: -2;">
			</div>
		</div>
		<div class="divider"></div>
		<div class="row mt-3 pt-4">
			<div class="col-12 col-md-4 offset-md-2">
				<img src="<?php echo includes_url('images/hair.png'); ?>" alt="" style="    width: 100%; z-index: -2;
    margin-top: 40px;">
			</div>
			<div class="col-12 col-md-4 mb-4 mb-md-0 mt-4 mt-md-0">
				<div class="section-tit">
					AIRTHESALON
				</div>
				<div class="section-desc">
					<p>
						At the core of what I offer as a hairstylist & technician is a personalised service dedicated to your individual requirements and unique style. Follow me on Instagram @airthesalon
					</p>
					<p>
						Based in Buckinghamshire, UK, my books are currently closed until January 2020
					</p>
				</div>
				<div class="section-btns mb-4 md-md-0">
					<a href="<?php echo site_url('/the-salon'); ?>" class="btn btn-custom">
						FIND OUT MORE
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>

</section>

<?php
get_footer();
