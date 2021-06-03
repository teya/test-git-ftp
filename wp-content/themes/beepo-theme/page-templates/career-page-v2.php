<?php

/**

 * Template Name: Careers Page v3

 *

 * @package WordPress

 * @subpackage Beepo_Career

 * @since Beepo Career 1.0

 */

?>

<?php get_header('beepo-three'); ?>

	<div class="" id="beepo-career-page-main-container">

		<div id="page-main-banner" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/career-pagep-v2/career-page-main-banner.jpg');">

		</div>

		<div id="career-page-introduction-section" class="">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<h1 class="text-center">CAREERS AT BEEPO</h1>

						<p>Here at Beepo, we value continuous improvement and believe that learning and development inspires us all to be good today and great tomorrow. Our agile, sophisticated and people first environment - paired with a strong focus on work-life balance sets us apart from the crowd. We offer a range of exciting career opportunities in a variety of different industries such as accounting,digital marketing,real estate, web development and  many more . Our Beepo family means the world to us and we are committed to not only being the best we can be but also helping others reaching their fullest potential</p>

					</div>

				</div>

			</div>

		</div> <!-- career-page-introduction-section -->

			<div id="job-opportunities-in-clark-section" class="featured-jobs-section">

			<div class="container">

				<div class="row">

					<div class="col-lg-12">

						<h2 class="text-center">FEATURED JOBS HERE AT BEEPO</h2>

					</div>

				</div>

				<div class="row">

					<?php

						$random_job_roles = get_posts([

							'post_type' => 'job-roles',

							'post_status' => 'publish',

				            'orderby'=>'rand',

				            // 'order'=>'ASC',

							// 'post__in' => array(1229,1253,1695,1208,1257,1788),

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

			</div>

		</div> <!-- END job-opportunities-in-clark-section -->

		<div id="search-for-a-job-container" class="career-page-searchbox">

			<div id="search-for-a-job-wrapper">

				<div class="container">

					<div class="row">

						<div class="col-lg-12">

							<div class="clearfix" id="search-you-job-form-container">

								<div id="search-you-job-form-wrapper">

									<form id="search-you-job-form" action="<?php echo $_SERVER['PHP_SELF']; ?>/careers/job-listing">

											<input class="search-you-job-form-input-text" type="text" name="search" placeholder="Search for jobs here">

											<input class="search-you-job-form-input-submit" type="submit" value="GO >">

									</form>						

								</div>

							</div>

						</div>

					</div>

				</div>	

			</div> <!-- END search-for-a-job-wrapper -->

		</div> <!-- END search-for-a-job-container -->

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

	</div> <!-- beepo-career-page-main-container -->	

<?php get_footer('beepo-three'); ?>

