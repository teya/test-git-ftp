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

	<div id="main-homepage-v2-container" class="">

		<div id="main-homepage-banner-container">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<h1>

							Make your <span>best career</span> decision yet.

						</h1>
						<a class="" href="<?php echo get_site_url(); ?>/job-listing/"><img class="homepage-apply-now-btn" src="https://beepo.com.ph/wp-content/uploads/2020/11/homepage-apply-now-btn.png" alt="Apply Now" style=""></a>
					</div>

				</div>

			</div>

		</div> <!-- END main-homepage-banner-container -->

		<div id="homepage-intro-and-search-for-jobs">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<div id="who-we-are-main-box">

							<!-- <h4>Who are we</h4> -->

							<h5>We are one of Australia's leading outsourcing specialists for businesses focused on sustainable growth.</h5>

							<p>Beepo is a Probe Group company, a full service Australian owned outsourcing company. With 12,600 people and over 15,000 deployed workstations across 6 countries. Making Probe the largest and most diverse Australian owned customer experience outsourcing provider. OurBeepo office is located in Clark, Pampanga. We provide exceptional workforce support to clients all over the world. Our primary focus is to help businesses grow sustainably with the help of fantastic Philippine talent. </p>

							<a href="/find-your-dream-job/"><button class="beepo-main-read-more-btn search-open-pos-btn"><i class="fa fa-search" aria-hidden="true"></i> Search open positions</button></a>

						</div> <!-- who-we-are-main-box -->
<!-- 
						<div class="clearfix homepage-searchbox-container" id="search-you-job-form-container">

							<div id="search-you-job-form-wrapper">

								<form id="search-you-job-form" action="<?php echo $_SERVER['PHP_SELF']; ?>/careers/job-listing">

										<input class="search-you-job-form-input-text" type="text" name="search" placeholder="Search for jobs here">

										<input class="search-you-job-form-input-submit" type="submit" value="GO >">

								</form>						

							</div> 

						</div>	 -->				

					</div>

				</div>

			</div>

		</div> <!-- homepage-intro-and-search-for-jobs -->

		<div id="search-for-a-job-container" class="homepage-searchbox-container">

			<div id="search-for-a-job-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-lg-12">



						</div>

					</div>

				</div>	

			</div> <!-- END search-for-a-job-wrapper -->

		</div> <!-- END search-for-a-job-container -->

		<div id="who-we-are-section">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

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

					<?php

						$random_job_roles = get_posts([

							'post_type' => 'job-roles',

							'post_status' => 'publish',

				            // 'orderby'=>'rand',

				            // 'order'=>'ASC',

							'post__in' => array(5524,3962,5521,5518,1227,3905),

							'numberposts' => 6

						]);





							// echo '<pre>';

							// print_r($random_job_roles);

							// echo '<pre>';

						// 	echo '<pre>';

						// print_r(get_the_post_thumbnail_url($random_job_roles[0]->ID));

						// echo '/<pre>';

							//die();

				

					?>

					<div class="col-md-4">

						<a href="<?php echo get_permalink($random_job_roles[0]->ID); ?>" target="_blank" class="job-panels-container">

							<div class="job-panels-wrapper clearfix">

								<div class="job-panels-icon">

									<?php if (!empty( get_the_post_thumbnail_url($random_job_roles[0]->ID) ) ): ?>

										<figure class="role-profile-featured-img">

											<?php // the_post_thumbnail(array(80, 80)); ?>

											<img src="<?php echo get_the_post_thumbnail_url($random_job_roles[0]->ID); ?>" width="60" height="60" alt="<?php echo $random_job_roles[0]->post_title; ?>" >

										</figure>

									<?php else: ?>

										<figure class="role-profile-featured-img">

											<img width="60" height="60" 

											src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 

											class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 

											alt="" 

											srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,

											<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 60px) 100vw, 80px">

										</figure>			

									<?php endif; ?>

								</div>

								<div class="job-panel-name">

									<div class="">

										<p><?php echo $random_job_roles[0]->post_title; ?></p>

									</div>

								</div>

							</div>

						</a>

					</div>

					<div class="col-md-4">

						<a href="<?php echo get_permalink($random_job_roles[1]->ID); ?>" target="_blank" class="job-panels-container">

							<div class="job-panels-wrapper clearfix">

								<div class="job-panels-icon">

									<?php if (!empty( get_the_post_thumbnail_url($random_job_roles[1]->ID) ) ): ?>

										<figure class="role-profile-featured-img">

											<?php // the_post_thumbnail(array(80, 80)); ?>

											<img src="<?php echo get_the_post_thumbnail_url($random_job_roles[1]->ID); ?>" width="60" height="60" alt="<?php echo $random_job_roles[1]->post_title; ?>" >

										</figure>

									<?php else: ?>

										<figure class="role-profile-featured-img">

											<img width="60" height="60" 

											src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 

											class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 

											alt="" 

											srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,

											<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 60px) 100vw, 80px">

										</figure>			

									<?php endif; ?>

								</div>

								<div class="job-panel-name">

									<div class="">

										<p><?php echo $random_job_roles[1]->post_title; ?></p>

									</div>

								</div>

							</div>

						</a>

					</div>

					<div class="col-md-4">

						<a href="<?php echo get_permalink($random_job_roles[2]->ID); ?>" target="_blank" class="job-panels-container">

							<div class="job-panels-wrapper clearfix">

								<div class="job-panels-icon">

									<?php if (!empty( get_the_post_thumbnail_url($random_job_roles[2]->ID) ) ): ?>

										<figure class="role-profile-featured-img">

											<?php // the_post_thumbnail(array(80, 80)); ?>

											<img src="<?php echo get_the_post_thumbnail_url($random_job_roles[2]->ID); ?>" width="60" height="60" alt="<?php echo $random_job_roles[2]->post_title; ?>" >

										</figure>

									<?php else: ?>

										<figure class="role-profile-featured-img">

											<img width="60" height="60" 

											src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 

											class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 

											alt="" 

											srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,

											<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 60px) 100vw, 80px">

										</figure>			

									<?php endif; ?>

								</div>

								<div class="job-panel-name">

									<div class="">

										<p><?php echo $random_job_roles[2]->post_title; ?></p>

									</div>

								</div>

							</div>

						</a>

					</div>

				</div>

				<div class="row">

					<div class="col-md-4">

						<a href="<?php echo get_permalink($random_job_roles[3]->ID); ?>" target="_blank" class="job-panels-container">

							<div class="job-panels-wrapper clearfix">

								<div class="job-panels-icon">

									<?php if (!empty( get_the_post_thumbnail_url($random_job_roles[3]->ID) ) ): ?>

										<figure class="role-profile-featured-img">

											<?php // the_post_thumbnail(array(80, 80)); ?>

											<img src="<?php echo get_the_post_thumbnail_url($random_job_roles[3]->ID); ?>" width="60" height="60" alt="<?php echo $random_job_roles[3]->post_title; ?>" >

										</figure>

									<?php else: ?>

										<figure class="role-profile-featured-img">

											<img width="60" height="60" 

											src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 

											class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 

											alt="" 

											srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,

											<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 60px) 100vw, 80px">

										</figure>			

									<?php endif; ?>

								</div>

								<div class="job-panel-name">

									<div class="">

										<p><?php echo $random_job_roles[3]->post_title; ?></p>

									</div>

								</div>

							</div>

						</a>

					</div>

					<div class="col-md-4">

						<a href="<?php echo get_permalink($random_job_roles[4]->ID); ?>" target="_blank" class="job-panels-container">

							<div class="job-panels-wrapper clearfix">

								<div class="job-panels-icon">

									<?php if (!empty( get_the_post_thumbnail_url($random_job_roles[4]->ID) ) ): ?>

										<figure class="role-profile-featured-img">

											<?php // the_post_thumbnail(array(80, 80)); ?>

											<img src="<?php echo get_the_post_thumbnail_url($random_job_roles[4]->ID); ?>" width="60" height="60" alt="<?php echo $random_job_roles[4]->post_title; ?>" >

										</figure>

									<?php else: ?>

										<figure class="role-profile-featured-img">

											<img width="60" height="60" 

											src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 

											class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 

											alt="" 

											srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,

											<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 60px) 100vw, 80px">

										</figure>			

									<?php endif; ?>

								</div>

								<div class="job-panel-name">

									<div class="">

										<p><?php echo $random_job_roles[4]->post_title; ?></p>

									</div>

								</div>

							</div>

						</a>

					</div>

					<div class="col-md-4">

						<a href="<?php echo get_permalink($random_job_roles[5]->ID); ?>" target="_blank" class="job-panels-container">

							<div class="job-panels-wrapper clearfix">

								<div class="job-panels-icon">

									<?php if (!empty( get_the_post_thumbnail_url($random_job_roles[5]->ID) ) ): ?>

										<figure class="role-profile-featured-img">

											<?php // the_post_thumbnail(array(80, 80)); ?>

											<img src="<?php echo get_the_post_thumbnail_url($random_job_roles[5]->ID); ?>" width="60" height="60" alt="<?php echo $random_job_roles[5]->post_title; ?>" >

										</figure>

									<?php else: ?>

										<figure class="role-profile-featured-img">

											<img width="60" height="60" 

											src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 

											class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 

											alt="" 

											srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,

											<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 60px) 100vw, 80px">

										</figure>			

									<?php endif; ?>

								</div>

								<div class="job-panel-name">

									<div class="">

										<p><?php echo $random_job_roles[5]->post_title; ?></p>

									</div>

								</div>

							</div>

						</a>

					</div>

				</div>

				<div class="row">

					<div class="col-lg-12">

						<a href="<?php echo get_home_url(); ?>/professional-beepo-careers/" target="_blank" class="beepo-btn-v2 beepo-btn-orange-v2 mx-auto">See more</a>

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

							<a href="<?php echo get_home_url(); ?>/careers/" target="_blank" class="beepo-btn-v2 beepo-btn-orange-v2">Join us now</a>

						</div> <!-- END join-us-cta-container -->

					</div>

					<div class="col-lg-7">

						<img class="meet-the-team-image" src="<?php bloginfo('template_directory'); ?>/images/homepage-v2/meat-the-team.png" alt="Meet the Team">

					</div>

				</div>

			</div>

		</div>

	</div> <!-- END main-homepage-v2-container -->

<?php get_footer('beepo-three'); ?>



