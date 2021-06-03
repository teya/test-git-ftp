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
	<main id="main-contents-page">
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
													<div class="col-sm-7">
														<i class="fas fa-map-marker-alt"></i>
														<p>
															2nd floor and Unit 1F Business Center 9, <br />
														    Philexcel Business Park, 2023, <br />
														    Clark Freeport, Pampanga
													  	</p>
													</div>
													<div class="col-sm-5">
														<i class="far fa-envelope"></i>
														<p>recruitment@beepo.com.au</p>
														<i class="fas fa-mobile-alt"></i>
														<p>0949 889 6063 <br />
     														0917 658 3430</p>														
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div id="beepo-career-map-wrapper">
												<div id="googleMap" style="width:100%;height:400px;"></div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>					
			</div> <!-- END #contact-us-contents-wrapper -->
		</section>
	</main> <!-- END #main-contents-page -->
	<script>
	function initMap() {
	var mapProp= {
	    center:new google.maps.LatLng(51.508742,-0.120850),
	    zoom:5,
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNEDU3WtCuBNDcepw0kNTb74twOH38ViI&callback=initMap"
  type="text/javascript"></script>
<?php get_footer(); ?>



2nd floor and Unit 1F Business Center 9, 
      Philexcel Business Park, 2023,
      Clark Freeport, Pampanga

 