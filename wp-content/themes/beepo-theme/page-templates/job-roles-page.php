<?php

/**

 * Template Name: Job Roles Main Page

 *

 * @package WordPress

 * @subpackage Beepo_Career

 * @since Beepo Career 1.0

 */

$args = array( 'number' => $per_page, 'orderby ' => 'name', 'offset' => $offset, 'hide_empty' => 1 );

?>

<?php get_header('beepo-three'); ?>

	<div id="job-descriptions-main-page-container">

		<div class="beepo-career-page-header-container" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/job-descriptions/job-descriptions-page-main-banner-bg.jpg');">

			<div class="container">

				<div class="row">

					<div class="col-sm-12">

						<div class="header-main-title-container">

							<div class="header-page-title-wrapper">

								<span>

									<h1>

										Professional Beepo Careers

									</h1>									

								</span>

							</div> <!-- header-page-title-wrapper -->

						</div> <!-- header-main-title-container -->

					</div>

				</div>

			</div>

		</div> <!-- beepo-career-page-header-container -->

		<div class="page-content-container">

			<div class="beepo-career-page-introduction-container">

				<div class="container">

					<div class="row">

						<div class="col-12">

							<span>Looking for a job in Clark, Pampanga? Beepo might be just the place to jump-start your career. We offer a vast array of roles in many different industries such as finance,digital marketing,web development and many more. We could have a job position that is the perfect fit for your skills and qualifications. We update our job openings daily so make sure you visit our website  regularly to ensure you don't miss out on the opportunity to apply for your dream role!</span>

						</div>

					</div>

				</div>

			</div> <!-- beepo-career-page-introduction-container -->

			<div id="job-roles-list-container">

				<?php

					$taxonomy = 'job-role-category';

					$tax_terms = get_terms( $taxonomy, $args );

				?>

				<div class="container">

					<div class="row">

						<div class="job-roles-section-column job-roles-section-column-left job-roles-section-column-left-inactive">

							<div class="job-roles-list-wrapper">

 							    <?php if(!empty($tax_terms)){ ?>

 									<ul class="job-roles-list">

 										<?php

 											// echo '<pre>';

 											// var_dump($tax_terms);

 											// echo '</pre>';

 											$sub_role_profiles = array();

 										?>

										<?php foreach ($tax_terms as $tax_term){ ?>

											<li  id="role-profile-id-<?php echo $tax_term->term_id; ?>" class="job-role-item">

												<span>

												<?php 

													$image_id = get_term_meta ( $tax_term->term_id, 'category-image-id', true ); 

													$image_url_array = wp_get_attachment_image_src ( $image_id, array('30', '30') ); 

													$image_src = (!empty($image_url_array[0]))? $image_url_array[0] : get_template_directory_uri() . '/images/main-role-profile-icon-placeholder.png';

												?>

												<img src="<?php echo $image_src; ?>" alt="$tax_term->name;">

												<?php echo $tax_term->name; ?>

												</span>

											</li>

										<?php } ?>

									</ul>

 								<?php }else{  ?>

 									<p>Job descriptions list is empty.</p>

 								<?php } ?>

							</div> <!-- job-descriptions-list-wrapper -->

						</div>

						<div class="job-roles-section-column job-roles-section-column-right" style="">

							<div class="sub-job-roles-list-wrapper">

								<?php foreach ($tax_terms as $tax_term){ ?>

								<?php

							  		$args = array(

											'orderby'=> 'title',

											'order' => 'ASC',

											'tax_query' => array(

											array(

												'taxonomy' => 'job-role-category',

												'field' => 'slug',

												'terms' => $tax_term->name

											)

										)

									);



									$the_query = new WP_Query( $args );

									$sub_role_profile_list_html = '';



								    if ( $the_query->have_posts() ) {

								        $sub_role_profile_list_html = '<div id="sub-job-roles-list-id-'.$tax_term->term_id.'" style="display: none;"><ul class="sub-job-roles-list">';

								        $html_list_items = '';

								        while ( $the_query->have_posts() ) {

								            $the_query->the_post();

								            $sub_role_profile_list_html .= '<li style="display: none;">';

								            $sub_role_profile_list_html .= '<a href="' . get_permalink() . '" target="_blank">';

								            $sub_role_profile_list_html .= get_the_title() . '&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>';

								            $sub_role_profile_list_html .= '</a>';

								            $sub_role_profile_list_html .= '</li>';

								        }

								        $sub_role_profile_list_html .= '</ul></div>';

								    } else {

								        

								    }

								    wp_reset_postdata();

								    echo $sub_role_profile_list_html;

								?>

								<?php } ?>

							</div>

						</div>

					</div>

				</div>

			</div> <!-- job-descriptions-list-container -->		

		</div> <!-- page-content-container -->

	</div> <!-- beepo-career-page-container -->

<?php get_footer('beepo-three'); ?>













