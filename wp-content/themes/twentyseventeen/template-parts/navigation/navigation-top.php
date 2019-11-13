<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" style="" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<div class="left-menu" style="display: inline-flex; width: 360px;">
		<a href="<?php echo site_url('/shop'); ?>">AIRSUPPLY</a>
		<a href="<?php echo site_url('/the-salon'); ?>">AIRTHESALON</a>
		<a href="<?php echo site_url('/air-crew'); ?>">AIRCREW</a>
	</div>
	<?php
		if ( !is_front_page() )
		{
	?>
	<div style="height: 125px;">
		<a href="<?php echo site_url('/'); ?>">
			<img class="" src="<?php echo includes_url('images/Logo_transparent.png'); ?>" style=" height: 80px;">
		</a>
	</div>
	<?php
		}
		else
		{
	?>
	<div style="line-height: 68px;">
		<a style="height: 60px;
    width: 60px;
    padding: 0;" href="<?php echo site_url('/'); ?>">
			<img class="" src="<?php echo includes_url('images/a_white.png'); ?>" style="height: 50px;">
		</a>
	</div>
	<?php
		}
	?>
	<div class="right-menu" style="display: inline; width: 360px; text-align: right;">
		<a href="<?php echo site_url('/my-account'); ?>" style="float: right;">SIGN UP</a>
		<a href="<?php echo site_url('/my-account'); ?>" style="float: right;">ACCOUNT</a>
	</div>
	<button class="menu-toggle m-0">
		<svg class="icon icon-bars" style="font-size: 2.5rem; color: #bf8a2e;" aria-hidden="true" role="img"><use href="#icon-bars" xlink:href="#icon-bars"></use></svg>
		<svg class="icon icon-close" style="font-size: 2.5rem; color: #bf8a2e;" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use></svg>
	</button>
	<div class="mobile-menu">
		<div class="mt-3">
			<a href="<?php echo site_url('/shop'); ?>">AIRSUPPLY</a>
		</div>
		<div class="mt-3">
			<a href="<?php echo site_url('/the-salon'); ?>">AIRTHESALON</a>
		</div>
		<div class="mt-3">
			<a href="<?php echo site_url('/air-crew'); ?>">AIRCREW</a>
		</div>
		<div class="mt-3">
			<a href="<?php echo site_url('/my-account'); ?>">SIGN UP</a>
		</div>
		<div class="mt-3">
			<a href="<?php echo site_url('/my-account'); ?>">ACCOUNT</a>
		</div>
	</div>
</nav><!-- #site-navigation -->
