<?php
/**
 * Template Name: Contact Us Page v2
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>
<?php get_header('beepo-three'); ?>
	<div class="beepo-career-page-container">
		<div class="beepo-career-page-header-container" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/contact-us-v2/contact-us-main-banner2-bg.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="header-main-title-container">
							<div class="header-page-title-wrapper">
								<span>
									<h1>
										Contact Us
									</h1>
								</span>
							</div> <!-- header-page-title-wrapper -->
						</div> <!-- header-main-title-container -->
					</div>
				</div>
			</div>
		</div> <!-- beepo-career-page-header-container -->
		<div id="contact-us-page-container" class="page-content-container">
			<div class="container">
				<div id="contact-from-container">
					<div class="row">
						<div class="col-sm-12">
							<p class="contact-form-title">Email Us</p>
							<?php 
								echo do_shortcode( '[contact-form-7 id="3770" title="Contact Us" html_id="beepo-career-contact-us-form2"]' );
							?>
						</div>
					</div>
				</div> <!-- contact-from-container -->
			</div>
		</div>
		<div id="contact-us-bottom-contact-info-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<p class="contact-form-title">Phone Us</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5">
						<div class="contact-us-info-container">
							<p>Talent Acquisition Department</p>
							<a href="mailto:talentacquisition@beepo.com.au?subject=Contact%20Us">talentacquisition@beepo.com.au</a><br />
							<a href="tel:0949-889-6063">0949 889 6063</a><br />
							<a href="tel:0917-658-3430">0917 658 3430</a>						
						</div>
					</div>
					<div class="col-sm-7">
						<p>
						Beepo Clark<br />
						Unit 1F-1 and 2/F Philexcel Business Center 9,<br />
						Philexcel Business Park, M Roxas Highway<br />
						Clark Freeport Zone, Philippines 2023
						</p>
					</div>
				</div>				
			</div>
		</div> <!-- contact-us-bottom-contact-info-container -->
	</div> <!-- beepo-career-page-container -->
<?php get_footer('beepo-three'); ?>