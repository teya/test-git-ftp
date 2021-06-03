<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>

<?php get_header(); ?>
	<main id="main-contents-page" role="main">
		<section>
			<div id="contact-us-jumbotron" class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class="display-4 text-center">Contact us for Jobs in Clark, Pampanga</h1>
				</div>
			</div>	<!-- END #contact-us-jumbotron -->		
		</section>
			<div id="contact-us-contents-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<section>
								<div id="main-contact-us-contents">
									<?php
									    wp_reset_query(); // necessary to reset query
									    while ( have_posts() ) : the_post();
									        the_content();
									    endwhile; // End of the loop.
									?>
								</div>
							</section>
						</div>
						<div class="col-md-6">
							<section>
								<div id="beepo-career-address-info-wrapper">
									<div class="row">
										<div class="col-sm-12">
											<div id="beepo-career-address-info">
												<div class="row">
													<div class="col-lg-7">
														<i class="fas fa-map-marker-alt"></i>
														<p> <?php echo get_option('beepo_careers_contact_complete_address'); ?> </p> </div>
													<div class="col-lg-5">
														<i class="far fa-envelope"></i>
														<p><?php echo get_option('beepo_careers_contact_email'); ?></p>
														<i class="fas fa-mobile-alt"></i>
														<p><?php echo get_option('beepo_careers_contact_numbers'); ?></p>														
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div id="beepo-career-map-wrapper">
												<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=2nd%20floor%20and%20Unit%201F%20Business%20Center%209%2C%20%20Philexcel%20Business%20Park%2C%202023%2C%20%20Clark%20Freeport%2C%20Pampanga&key=AIzaSyAzsradj6yWpAVRB46Ku8iUh5OMdUXk8Ko" allowfullscreen></iframe>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>					
			</div> <!-- END #contact-us-contents-wrapper -->
			<section>
				<div id="contact-us-bottom-contents-container" class="align-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div id="contact-us-bottom-contents">
									<div id="contact-us-bottom-contents-info">
										<?php echo get_option('beepo_careers_contact_bottom_contents'); ?>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</section>
		</section>
	</main>
<?php get_footer('beepo-two'); ?>