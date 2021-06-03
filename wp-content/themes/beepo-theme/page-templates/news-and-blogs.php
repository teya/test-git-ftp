<?php
/**
 * Template Name: News & Blogs Page
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */

?>

<?php get_header(); ?>
<main id="main-contents-page" role="main">
	<section>
		<div id="news-and-blog-jumbotron" class="jumbotron jumbotron-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-offset-5">
						<div class="jumbotron-contents-wrapper my-auto">
							<div class="jumbotron-contents my-auto">
								<h1 class="display-4 text-left"><?php wp_title(''); ?></h1>
								<p class="lead">
									 <?php
									    while ( have_posts() ) : the_post(); ?> 
									        <div class="entry-content-page">
									            <?php the_content(); ?> <!-- Page Content -->
									        </div>
									    <?php
									   		endwhile; //resetting the page loop
									    	wp_reset_query(); //resetting the page query
								    ?>								
								</p>	
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>	<!-- END #contact-us-jumbotron -->		
	</section>
	<div id="page-main-contents">	
		<section>
			<div id="beepo-career-featured-post-container">
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
						<?php foreach( $featured_post as $recent_featured_post ){?> 
						<article>
							<div id="beepo-career-featured-post-wrapper">
								<p class="featured-post-header">Featured Post</p>
								<div class="row">
									<div class="col-md-5">
										<a href="<?php echo get_permalink($recent_featured_post["ID"]); ?>">
											<figure>
												<?php 
													echo getBeepoCareersFeaturedPostImgNewsAndBlogs($recent_featured_post["ID"], 'top-featured-post-img', $recent_featured_post["post_title"]);
												?>
											</figure>										
										</a>
									</div>
									<div class="col-md-7">
											<a href="<?php echo get_permalink($recent_featured_post["ID"]); ?>"><h3 class="featured-post-title"><?php  echo $recent_featured_post["post_title"]; ?></h3></a>
											<p class="author-info"> 
											<span>By: <?php echo get_the_author_meta( 'first_name', $recent_featured_post['post_author'] ); ?> <?php echo get_the_author_meta( 'last_name', $recent_featured_post['post_author'] ); ?> </span> | <span><?php echo date('F j, Y', strtotime($recent_featured_post['post_date'])); ?></span>
											</p>
											<p class="featured-post-excerpt">
												<?php echo $recent_featured_post['post_excerpt']; ?>
											</p>
											<a href="<?php echo get_permalink($recent_featured_post["ID"]); ?>"><button class="beepo-main-read-more-btn">Read More</button></a>
									</div>						
								</div>
							</div>
					</article>	
					<?php } wp_reset_query(); ?> 		
				</div>			
			</div>
		</section>
		<?php
			// $args = array(
			// 	'numberposts' => 10,
			// 	'offset' => 0,
			// 	'category' => '4,3' ,
			// 	'orderby' => 'post_date',
			// 	'order' => 'DESC',
			// 	'post_type' => 'post',
			// 	'post_status' => 'publish',
			// 	'suppress_filters' => true,
			// 	'posts_per_page' => 2,
			// 	'paged' => ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
			// );
			// $recent_posts = wp_get_recent_posts( $args, ARRAY_A );


			// WP_Query arguments
			// $args_news = array (
			//     'post_type'             => array( 'news' ),
			//     'pagination'            => true,
			//     'posts_per_page'        => '9',
			//     'orderby'               => 'date',
			//     'paged'                 => $paged,
			//     'cat'                   => $category_id,
			// );

			$recent_updates_args = array( //set-up arguments to pass to WP_Query
				'category_name'		=> 'blogs, news', // can use 'cat' parameter with string of category ID
				'posts_per_page'	=> 5,
				'orderby' 			=> 'date',
				'order' 			=> 'DESC',
				'paged' 			=> ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1
			);

			$recent_updates_objects = new WP_Query( $recent_updates_args );
		?>
		<section>
			<div id="beepo-career-recent-posts-container">
				<div class="container">
					<ul id="beepo-career-recent-posts" class="no-padding-list-start">
      					<?php if ( $recent_updates_objects->have_posts() ) { ?>
            				<?php while ( $recent_updates_objects->have_posts() ) { ?>
               					<?php $recent_updates_objects->the_post(); ?>
									<li>
										<?php $post_id = get_the_ID(); ?> 
										<article>
											<div class="row">
												<div class="col-md-5">
													<a href="<?php echo get_permalink(); ?>">
														<figure>
															<?php echo getBeepoCareersFeaturedPostImgNewsAndBlogs( $post_id, 'featured-post-img', ''); ?>
														</figure>								
													</a>									
												</div>
												<div class="col-md-7">
													<a href="<?php echo get_permalink(); ?>"><?php the_title('<h3 class="beepo-career-post-title">', '</h3>' ); ?></a>
													<p class="author-info"> 
														<p class="author-info"> 
															<!-- <span>By: <?php the_author(); ?> </span> | --> <span> <?php the_date(); ?></span>
														</p>														
													</p>
													<p class="beepo-career-post-excerpt">
														<?php the_excerpt(); ?>
													</p>
													<a href="<?php echo get_permalink(); ?>"><button class="beepo-post-read-more-btn">Read More</button></a>									
												</div>
											</div>
										</article>
									</li>									
                            <?php } ?>
       					<?php } ?>
					</ul>
					<div class="pagination">
					    <?php 
					        echo paginate_links( array(
					            'base'         => strtok(str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ))), '?'),
					            'total'        => $recent_updates_objects->max_num_pages,
					            'current'      => max( 1, get_query_var( 'paged' ) ),
					            'format'       => '?paged=%#%',
					            'show_all'     => false,
					            'type'         => 'plain',
					            'end_size'     => 2,
					            'mid_size'     => 1,
					            'prev_next'    => true,
					            'prev_text'    => sprintf( '<i></i> %1$s', __( '&larr;', 'text-domain' ) ),
					            'next_text'    => sprintf( '%1$s <i></i>', __( '&rarr;', 'text-domain' ) ),
					            'add_args'     => true,
					            'add_fragment' => '',
					        ) );
					        wp_reset_query();
					    ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</main> <!-- END #main-contents-page -->
<?php get_footer('beepo-two'); ?>