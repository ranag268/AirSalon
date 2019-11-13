<?php
/*
	Template Name: About
*/
get_header(); ?>
<style>
.site-content
{
	padding: 0 !important;
}
.site-footer
{
	margin-top: 0px !important;
    border: none !important;
}
</style>
<section style="background-color: #d9bba9; padding: 40px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center" style="text-align: center;">
				<img src="<?php echo includes_url('images/Logo_transparent.png') ?>" size="height: 100px;" alt="">
			</div>
			<div class="col-12 text-center" style="text-align: center; color: white; font-size: 30px; letter-spacing: 0.13rem;">
				THE SALON
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid about-padding" style="">
		<div class="row">
			<div class="col-lg-6 text-center" style="">
				<img src="<?php echo includes_url('images/hair.png'); ?>" style="width: 70%;">
				<div class="w-100 text-center">
					<a target="_blank" href="" class="btn btn-custom mt-4">Follow me on instagram</a>
				</div>
			</div>
			<div class="col-12 col-lg-6" style="padding: 30px;">
				<p class="light-green large-text md-small-text" style="text-align: left;margin-bottom: 30px; opacity: 0.8;">
				HI, I'M CAT. I RUN A BOUTIQUE STUDIO HAIR SALON IN MARLOW, BUCKINGHAMSHIRE; USING & RETAILING THE INCREDIBLE DAVINES. MY BOOKS ARE CURRENTLY CLOSED UNTIL JANUARY 2020 BUT PLEASE FOLLOW ME@AIRTHESALON ON INSTGRAM FOR MORE INFO & WELLBING INSPRITAION.
				</p>
				<p class="light-green large-text md-small-text" style="text-align: left; opacity: 0.8;">
				WITH BUSY LIVES & BUSY MINDS, IT'S ESSENTIAL THAT WE TAKE TIME TO BREATHE. I CREATED THE AIR BRAND & PARTICULARLY AIR THE SALON AS AN OPPORTUNITY FOR MY CLIENTS TO ENJOY AN UNHURRIED HAIR APPOINTMENT IN A CALMING ENVIRONMENT WITH PERSONALISED ATTENTION & CARE
				</p>
			</div>
		</div>
	</div>
	<div style="position: relative;" class="container-fluid text-center p-0">
		<img src="<?php echo includes_url('images/about-splash.png') ?>" style="top: 0; left: 0; width: 100%;" alt="">
	</div>
</section>

<?php
get_footer();
