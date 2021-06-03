<?php
/**
 * Template Name: JobAdder Job Listing
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>
<?php get_header(); ?>
	<main id="jobadder-main-container" role="main">
		<section>
			<div id="page-main-banner" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/career-pagep-v2/career-page-main-banner.jpg');">

			</div>
		</section>
		<section>
			<div id="jobadder-top-contents">
				<div class="container">
					<div class="row"> 
						<div class="col-lg-12">
							<h1 class="text-center">CAREERS AT BEEPO</h1>
							<div class="beepo-career-page-description">
							    <?php
							    	while ( have_posts() ) : the_post(); ?> 
							        <div class="entry-content-page">
							            <?php the_content(); ?> <!-- Page Content -->
							        </div>
							    <?php
							   		endwhile; //resetting the page loop
							    	wp_reset_query(); //resetting the page query
							    ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container jobadder-container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Search open positions now</h2>
						<div id="ja-jobs-widget"></div>
					</div>
				</div>
			</div>
		</section>
		<section>
		<div id="how-to-apply-section">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<h3 class="text-center">How to apply</h3>

						<p class="text-center">There are many ways to apply for our job openings in Clark, Pampanga. <br />Select the best option for you so we can view your qualiﬁcations right away.</p>

					</div>					

				</div>

				<div class="row">

					<div class="col-sm-3">



					</div>

					<div class="col-sm-3">

						<div class="how-to-apply-icons-container">

							<a href="/professional-beepo-careers/">

								<div class="how-to-apply-icons-wrapper">

									<img src="<?php bloginfo('template_directory'); ?>/images/career-pagep-v2/apply-on-our-website-icon.png" alt="">

								</div>

								<h6>Apply on our <br /> website</h6>

							</a>

						</div>

					</div>

<!-- 					<div class="col-md-4">

						<div class="how-to-apply-icons-container">

							<a href="#">

								<div class="how-to-apply-icons-wrapper">

									<img src="<?php bloginfo('template_directory'); ?>/images/career-pagep-v2/apply-on-facebook-icon.png" alt="">

								</div>

								<h6>Apply on <br />Facebook</h6>

							</a>

						</div>

					</div> -->

					<div class="col-sm-3">

						<div class="how-to-apply-icons-container">

							<a href="/contact-us/">

								<div class="how-to-apply-icons-wrapper">

									<img src="<?php bloginfo('template_directory'); ?>/images/career-pagep-v2/visit-our-office-icon.png" alt="">

								</div>

								<h6>Visit our <br />office</h6>

							</a>

						</div>

					</div>

					<div class="col-sm-3">

						

					</div>

				</div>

			</div>

		</div>			
		</section>
	</main>
<script>
    var _jaJobsSettings = {
        key: "AU3_v6kwl5kydflefa6e5kszmrd5sy",
        jobSearchSettings: {
            showSearchForm: true,
            searchButtonText: "Find my dream job"
        },
        jobListSettings: {
            readMoreText: "Learn more ›",
			alwaysShowPager: true,
			animateScrollOnPageChange: true
        },
        applicationFormSettings: {
            useExternalApplicationForm: true,
            showExternalApplicationFormInNewWindow: false
        }
    };
</script>
<script src="//apps.jobadder.com/widgets/v1/jobs.min.js"></script>
<?php get_footer('beepo-three'); ?>


