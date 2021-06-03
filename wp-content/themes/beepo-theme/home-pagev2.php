<?php
/**
 * Template Name: Home Page v2
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>
<?php get_header('beepo-three'); ?>
<div id="main-homepage-v2-container">
	<div id="main-homepage-banner-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>
						Make your <span>best career</span> decision yet.
					</h1>
				</div>
			</div>
		</div>
	</div> <!-- END main-homepage-banner-container -->
	<div id="search-for-a-job-container">
		<div id="search-for-a-job-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="clearfix" id="search-you-job-form-container">
							<div id="search-you-job-form-wrapper">
								<form id="search-you-job-form" action="<?php echo $_SERVER['PHP_SELF']; ?>/careers/job-listing">
										<input class="search-you-job-form-input-text" type="text" name="search" placeholder="search for jobs here">
										<input class="search-you-job-form-input-submit" type="submit" value="GO >">
								</form>						
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div> <!-- END search-for-a-job-wrapper -->
	</div> <!-- END search-for-a-job-container -->
	<div id="who-we-are-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="who-we-are-main-box" class="beepo-drop-shadow">
						<h4>Who are we</h4>
						<h5>We are one of Australia's leading outsourcing specialists for businesses focused on sustainable growth.</h5>
						<p>Beepo is a Probe Group company, a full service Australian owned outsourcing company. With 8,000 people across 16 sites spanning three countries - our Beepo office is located in Clark, Pampanga. We provide exceptional workforce support to clients all over the world. Our primary focus is to help businesses grow sustainably with the help of fantastic Philippines talent.</p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- END who-we-are-section -->
	<div id="job-opportunities-in-clark-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h4><span>Job opportunities</span> in Clark, Pampanga</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="job-opportunities-column">
						<div class="job-opportunities-icon-container">
							<div class="job-opportunities-icon-wrapper">
								<div class="job-opportunities-icons job-opportunities-accountant"></div>
							</div>
							<h5>Accountant</h5>
							<p>Provides financial information to management by researching and analyzing accounting data; preparing reports.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="job-opportunities-column">
						<div class="job-opportunities-icon-container">
							<div class="job-opportunities-icon-wrapper">
								<div class="job-opportunities-icons job-opportunities-digital-marketing-specialist"></div>
							</div>
							<h5>Digital Marketing Specialist</h5>
							<p>They are usually required to provide clear direction to the other members of the marketing team, such as the copywriter, web designer and sales executives. </p> </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="job-opportunities-column">
						<div class="job-opportunities-icon-container">
							<div class="job-opportunities-icon-wrapper">
								<div class="job-opportunities-icons job-opportunities-graphic-designer"></div>
							</div>
							<h5>Graphic Designer</h5>
							<p>Prepares visual presentations to be accomplished by gathering information and designing art and copy layouts. </p> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="job-opportunities-column">
						<div class="job-opportunities-icon-container">
							<div class="job-opportunities-icon-wrapper">
								<div class="job-opportunities-icons job-opportunities-outbound-agent"></div>
							</div>
							<h5>Outbound Agent</h5>
							<p>Working with existing customers to find out how they can benefit from new solutions, creating offers by establishing their needs and ensure a smooth on-boarding process </p> </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="job-opportunities-column">
						<div class="job-opportunities-icon-container">
							<div class="job-opportunities-icon-wrapper">
								<div class="job-opportunities-icons job-opportunities-property-management-assistant"></div>
							</div>
							<h5>Property Management Assistant</h5>
							<p>Perform management business support functions within the Residential or Commercial Property Management market and/or platform, serving mostly as first contact with tenants, vendors, and clients. </p> </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="job-opportunities-column">
						<div class="job-opportunities-icon-container">
							<div class="job-opportunities-icon-wrapper">
								<div class="job-opportunities-icons job-opportunities-web-designer-and-developer"></div>
							</div>
							<h5>Website Designer/Developer</h5>
							<p>Designs and builds websites for corporate or individual clients. Works with colleagues and clients to understand website requirements and client needs.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<a href="<?php echo get_home_url(); ?>/careers/" target="_blank" class="beepo-btn-v2 beepo-btn-orange-v2 mx-auto">See more</a>
				</div>
			</div>
		</div>
	</div> <!-- END job-opportunities-in-clark-section -->
	<div id="join-us-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div id="join-us-cta-container">
						<h3>
							Beepo is a new breed outsourcing company that provides exceptional workforce support. <span>At Beepo, we believe in working hard and aiming high.</span>
						</h3>
						<a href="<?php echo get_home_url(); ?>/careers/" target="_blank" class="beepo-btn-v2 beepo-btn-orange-v2 beepo-drop-shadow">Join us now</a>
					</div> <!-- END join-us-cta-container -->
				</div>
				<div class="col-lg-7">
					<img class="meet-the-team-image" src="<?php bloginfo('template_directory'); ?>/images/homepage-v2/home-page-banner-img.png" alt="Meet the Team">
				</div>
			</div>
		</div>
	</div>
</div> <!-- END main-homepage-v2-container -->
<?php get_footer('beepo-three'); ?>

