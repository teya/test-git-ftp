<?php

/**

 * Template Name: News and Blogs page

 *

 * @package WordPress

 * @subpackage Beepo_Career

 * @since Beepo Career 1.0

 */

$args = array( 'number' => $per_page, 'orderby ' => 'name', 'offset' => $offset, 'hide_empty' => 1 );

?>

<?php get_header('beepo-three'); ?>

	<div id="news-and-blogs-page-container">

		<div class="beepo-career-page-header-container" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/news-and-blogs-page/news-and-blog-banner-bg.jpg');">

			<div class="container">

				<div class="row">

					<div class="col-sm-12">

						<div class="header-main-title-container">

							<div class="header-page-title-wrapper">

								<span>

									<h1>

										Latest news and updates

									</h1>									

								</span>

							</div> <!-- header-page-title-wrapper -->

						</div> <!-- header-main-title-container -->

					</div>

				</div>

			</div>

		</div><!-- beepo-career-page-header-container -->

		<div class="page-content-container">

			<div class="page-main-contents">

				<div class="container">

					<div class="row">

						<div class="col-12">

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

									the_content();

								endwhile; else: ?>

									<p>Sorry, no posts matched your criteria.</p>

							<?php endif; ?>

						</div>

					</div>

				</div>

			</div><!-- page-main-contents -->

			<div class="featured-post-container">

				<div class="container">

					<?php

						$featured_post_args = array(

							'numberposts' => 1,

							'offset' => 0,

							'category' => '5' ,

							'orderby' => 'post_date',

							'order' => 'DESC',

							'post_type' => 'post',

							'post_status' => 'publish',

							'suppress_filters' => true

						);

						$featured_post = wp_get_recent_posts( $featured_post_args, ARRAY_A );

					?>

					<?php foreach( $featured_post as $recent_featured_post ): ?>

						<article id="featured_post_id_<?php echo $recent_featured_post["ID"]; ?>" class="featured-post-inner-contents">

							<div class="row">

								<div class="col-12">

									<h4 class="news-and-blog-featured-post-section-title">Featured post</h4>

								</div>

							</div>

							<div class="row">

								<div class="col-md-5">	

									<a href="<?php echo get_permalink($recent_featured_post["ID"]); ?>">

										<figure>

											<?php 

												echo getBeepoCareersFeaturedPostImgNewsAndBlogs($recent_featured_post["ID"], 'news-and-blog-featured-post-img', $recent_featured_post["post_title"]);

											?>

										</figure>										

									</a>

								</div>

								<div class="col-md-7">

										<a href="<?php echo get_permalink($recent_featured_post["ID"]); ?>"><h5 class="news-and-blogs-post-titles"><?php  echo $recent_featured_post["post_title"]; ?></h5></a>

										<p class="author-info"> 

										<span>By: <?php echo get_the_author_meta( 'first_name', $recent_featured_post['post_author'] ); ?> <?php echo get_the_author_meta( 'last_name', $recent_featured_post['post_author'] ); ?> </span> | <span><?php echo date('F j, Y', strtotime($recent_featured_post['post_date'])); ?></span>

										</p>

										<p class="featured-post-excerpt">

											<?php echo $recent_featured_post['post_excerpt']; ?>

										</p>

										<a href="<?php echo get_permalink($recent_featured_post["ID"]); ?>"><button class="beepo-main-read-more-btn">Read More</button></a>

								</div>						

							</div>	

						</article>

					<?php endforeach; ?> 

					<?php wp_reset_query(); ?>

					<div class="row">

						<div class="col-12">

							<?php echo do_shortcode('[ajax_load_more id="news-and-blogs-recent-posts" post_type="post" posts_per_page="2" scroll="false" button_label="Show more"]'); ?>				

						</div>					

					</div>	

				</div>					

			</div><!-- featured-post-container -->			

		</div> <!-- page-content-container -->

	</div> <!-- news-and-blogs-page-container -->

<?php get_footer('beepo-three'); ?>