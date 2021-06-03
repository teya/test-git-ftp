<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>
<?php get_header('beepo-two'); ?>
	<main id="beepo-careers-homepage-main" role="main">
		<section>
			<div id="beepo-home-page-main-banner" class="jumbotron container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="home-page-featured-img-container">
								<div class="container">
									<div id="beepo-career-homepage-jumbotron-container">
										<h1 class="beepo-career-homepage-jumbotron-h1"><span>Your career awaits</span> <br /> At Beepo</h1>
										<a href="<?php echo get_home_url(); ?>/careers/job-listing/"><button class="beepo-career-gray-btn">Apply Now!</button></a>
									</div>
								</div>
							</div>			
						</div>
					</div>				
				</div>
			</div>	
		</section>
		<div id="beepo-career-main-page-background">
			<section>
				<div id="beepo-career-find-dreamjob-form-container">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div id="beepo-career-search-dream-job-form-wrapper">
									<h2>Find your dream role</h2>
									<?php
										$job_categories_args = array(
										   'taxonomy' => 'yakadanda_jobadder_category',
										   'orderby' => 'name',
										   'order'   => 'ASC'
										);
										$job_categories = get_categories($job_categories_args);
									?>
									<form id="beepo-career-search-dream-job-form" action="<?php echo $_SERVER['PHP_SELF']; ?>/careers/job-listing">
										<input type="text" name="search" class="beepo-input-text-search" placeholder="search for jobs here">
										<select name="beepo-job-category" class="beepo-input-dropdown">
											<option value="0">Category</option>
											<?php
												foreach($job_categories as $cat_items) {
													if($cat_search_id == $cat_items->term_id){
														echo '<option selected="selected" value="'.$cat_items->term_id .'"> '.$cat_items->name . '</option>';
													}else{
														echo '<option value="'.$cat_items->term_id .'"> '.$cat_items->name . '</option>';
													}
												}
											?>
										</select>
										<input class="beepo-career-gray-btn" type="submit" value="Search">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div id="beepo-career-role-profiles-container">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div id="beepo-career-role-profiles-wrapper">
									<h2 class='text-center'><?php echo get_option('role_profile_section_title'); ?></h2>
									<ul id="beepo-career-role-profiles" class="no-padding-list-start">
										<?php
											$random_role_profiles = get_posts([
												'post_type' => 'role-profiles',
												'post_status' => 'publish',
									            'orderby'=>'title',
									            'order'=>'ASC',
												'post__in' => array(1229,1253,1695,1208,1257,1788),
												'numberposts' => 6
											]);
										?>

										<?php if(!empty($random_role_profiles)){ ?>
											<?php foreach ( $random_role_profiles as $item ){ ?>
													<li id="beepo-career-role-profiles-items-<?php echo $item->ID; ?>" class="beepo-career-role-profiles-items">
														<div class="beepo-career-role-profiles-items-container">
												<!-- 			<a class="apply-nw-btn" href="<?php echo get_home_url(); ?>/careers/job-listing/?search=<?php echo urlencode($item->post_title); ?>&beepo-job-category=0"><button class="beepo-career-apply-now-btn">Apply Now</button></a> -->
															<?php 
															 	$url = getRoleProfilesFeaturedImg($item->ID);
															?>
															<a  class="btn-job-title"href="<?php echo get_permalink($item->ID);  ?>">
															<div class="beepo-career-role-profiles-items-overlay" style="background-image: url('<?php echo $url; ?>')">
																
															</div>
															
															<h4><?php echo $item->post_title; ?></h4></a>
														</div>
													</li>												
											<?php } ?>
										<?php } ?>
									</ul>
									<?php if(!empty(get_option('role_profile_btn_label'))): ?>
										<?php $role_profile_btn_link = (!empty(get_option('role_profile_btn_link')))? get_option('role_profile_btn_link') : '#'  ?>
										<a href="<?php echo $role_profile_btn_link; ?>"><button class="beepo-carreer-white-btn text-center"><?php echo get_option('role_profile_btn_label'); ?></button></a>
									<?php endif; ?>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</section>
			<div id="beepo-career-latest-news-container">
				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div id="beepo-career-latest-news-wrapper">
									<h1>Latest News</h1>
									<?php
										$args = array(
											'numberposts' => 2,
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
									<ul class="no-padding-list-start" id="beepo-latest-news-posts">
										<?php foreach( $recent_posts as $recent ){?> 
											<li>
												<article>
													<div class="beepo-latest-news-post-item">
														<h3><?php  echo $recent["post_title"]; ?></h3>
														<div class="beepo-latest-news-post-item-featured-img">
															<figure><?php echo get_the_post_thumbnail( $recent["ID"], array( 430, 270), array( 'class' => 'beepo-latest-news-post-img' )  ); ?></figure>
														</div>
														<div class="beepo-career-except-post-container">
															<p class="beepo-career-except-post"><?php echo $recent['post_excerpt']; ?></p>
														</div>
														<a href="<?php echo get_permalink($recent["ID"]); ?>"><button class="beepo-post-read-more-btn">Read More</button></a>
													</div>
												</article>
											</li>
										<?php } wp_reset_query(); ?> 
									</ul>
								</div>
								<div id="beepo-career-bottom-cta-container">
									<?php echo get_option('homepage_bottom_contents'); ?>
									<?php $homepage_bottom_btn_link = (!empty(get_option('homepage_bottom_btn_link')))? get_option('homepage_bottom_btn_link') : '#'  ?>
									<a href="<?php echo $homepage_bottom_btn_link; ?>"><button class="beepo-career-gray-btn text-center"> <?php echo get_option('homepage_bottom_btn_label'); ?></button></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
<?php get_footer('beepo-two'); ?>