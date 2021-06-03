<?php
/**
 * Template Name: Careers Page
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>

<?php get_header(); ?>
		<div id="beepo-careers-page-main-banner" class="container-fluid" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/beepo-main-banner1.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="beepo-banner-contents-wrapper">
							<div class="beepo-banner-contents">
								<p class="banner-top-paragraph">Find Your Dream Job</p>
								<p class="banner-bottom-paragraph">At Beepo</p>
								<form id="banner-search-jobs" action="<?php echo $_SERVER['PHP_SELF']; ?>/careers/job-listing">
									<input type="text" placeholder="search for jobs here" name="search">
									 <button type="submit"></button>
								</form>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
		<main id="beepo-main-careers-page" role="main">
				<div class="container">
					<div id="beepo-main-box-container">
						<div class="row">
							<div id="beepo-latest-updates-main-container" class="col-lg-8 order-lg-last">
								<div class="row">
									<div class="col-lg-12">
										<section id="beepo-how-to-apply-container">
											<div class="">
												<h2 class="outer-space-heading text-center">How to Apply</h2>
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
											<div id="beepo-how-to-apply-list">
												<ul class="beepo-how-to-apply">
													<li><a href="<?php echo get_site_url(); ?>/careers/job-listing/">
															<div class="how-to-apply-icon">
																<img src="<?php echo get_template_directory_uri() ?>/images/careers-page/how-to-apply-job-listing.png" alt="
Find your dream job on Beepo.">
															</div>
															<div class="how-to-apply-desc">Apply on our website</div>
														</a>
													</li>
													<li>
														<a href="https://www.facebook.com/BeepoPHCareers/" target="_blank">
															<div class="how-to-apply-icon">
																<img src="<?php echo get_template_directory_uri() ?>/images/careers-page/how-to-apply-facebook.png" alt="
Click to apply on Facebook">
														 	</div>
														 	<div class="how-to-apply-desc">Apply on Facebook</div>
														</a>
													</li>
													<li><a href="/contact-us/">
															<div class="how-to-apply-icon">
																<img src="<?php echo get_template_directory_uri() ?>/images/careers-page/how-to-apply-location.png" alt="

Click to know Beepo's Location">
															</div>
															<div class="how-to-apply-desc">Visit our Office</div>
														</a>
													</li>
	<!-- 												<li>
														<a href="#">
															<div class="how-to-apply-icon">
																<img src="<?php echo get_template_directory_uri() ?>/images/careers-page/how-to-apply-resume.png" alt="Resume">
															</div>
															<div class="how-to-apply-desc">Upload your Resume</div>
														</a>
													</li> -->
												</ul>
											</div>
										</section><!--  END beepo-how-to-apply-container -->
									</div>
								</div>
								<div class="row">
									<div class="col-lg-8 col-offset-4">
										<section id="beepo-latest-updates-container">
											<h2 class="orange-heading">Latest Updates</h2>
											<p>Check out recent activities, activities and news from the Beepo Team!</p>
											<?php
												$numbered = 1;
												$args = array(
													'numberposts' => 4,
													'offset' => 0,
													'category' => '0' ,
													'orderby' => 'post_date',
													'order' => 'DESC',
													'post_type' => 'post',
													'post_status' => 'publish',
													'suppress_filters' => true
												);
												$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
											?>
											<ul id="beepo-recent-post-list">
												<?php foreach( $recent_posts as $recent ){?> 
												<?php
													$newDate = date("M d, Y", strtotime($recent['post_date']));
												?>
												<li>
													<article><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php  echo $numbered . '. ' . $recent["post_title"]; ?><span> - <?php echo $newDate; ?></span></a></article>
												</li>
												<?php $numbered++; } wp_reset_query(); ?> 
											</ul>
											<a href="/news-and-updates/"><button class="beepo-read-more-btn text-center">Read More</button></a>
										</section>
									</div>
								</div>
							</div>
							<div class="col-lg-4 order-lg-first">
								<div class="sidebar">
									<h2 class="orange-heading">Featured Jobs</h2>
									<nav>
										<?php
											wp_nav_menu( array( 
											    'theme_location' => 'career-page-featured-jobs', 
											    'container_id' => 'beepo-career-featured-jobs',
											    'container_class' => '',
											    'link_before'     => '',
												'link_after'      => '',
											    'items_wrap'=>'<ul class="beepo-career-featured-categories no-padding-list-start menu-item-has-children">%3$s</ul>') 
											); 
										?>
									</nav>
									<div class="text-center">
										<a href="<?php echo get_site_url(); ?>/careers/job-listing/"><button class="main-button-orange">Apply Now</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</main>
<?php get_footer('beepo-two'); ?>



