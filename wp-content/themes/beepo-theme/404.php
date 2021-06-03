<?php 
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage beepo-theme
 * @since Beepo Theme 1.0
 */

get_header(); ?>
	<main id="beepo-careers-not-found-page" role="main">
		<div class="row page-not-found-container-page">
			<div class="col-lg-12">
				<h2 class="text-center">OOPS...</h2>
				<div class="page-header section-header text-center">
					<h1>404 ERROR</h1>
					<p class="secondary-header"><span id="hs_cos_wrapper_subheader" class="section-subheader">SORRY THE PAGE YOU'RE LOOKING <br>FOR CAN'T BE FOUND</span></p>
				</div>
				<a id="back-to-home-btn" href="<?php echo get_site_url(); ?>"> back to home </a>
			</div>
		</div>
		<div class="row">
			<figure class="page-not-found-bottom-img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/404_error_background.png" alt="404 Bottom Background">
			</figure>
		</div>
	</main>
<?php get_footer('beepo-two'); ?>