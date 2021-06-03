<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
get_header(); ?>
	<main id="main-contents-page" role="main">
		<?php while ( have_posts() ) : the_post(); ?> 
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section>
					<div id="beepo-career-post-banner-container">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<div class="beepo-career-featured-img-post">
										<figure>
											<?php echo get_the_post_thumbnail( get_the_ID(), array( 430, 270), array( 'class' => 'beepo-career-post-img' )  ); ?>
										</figure>
									</div>
								</div>
								<div class="col-md-7">
									<?php the_title( '<h1 class="entry-title">', '</h1>', true ); ?>
									<p class="author-info"> 
									<span class="author-name">by: <?php echo get_the_author_meta( 'first_name', $recent['post_author'] ); ?> <?php echo get_the_author_meta( 'last_name', $recent['post_author'] ); ?> </span> | <span class="post-date"><?php echo date('F j, Y', strtotime(get_the_date())); ?></span>
									</p>
									<div id="beepo-career-social-share-container">
										<p>Share:</p>
											<ul class="beepo-post-social-share">
												<li><a href="https://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
												<li><a href="https://plus.google.com/share?url=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-square"></i></a></li>
												<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
												<li><a href="http://www.twitter.com/share?url=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
											</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
				<section>
					<div id="beepo-post-entry">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						
					</div>
				</section>
			</article>
		<?php  
			$categories_post_ids = get_the_category(); 
		?>
		<?php endwhile; ?>
		<section>
			<div class="container">
				<div id="beepo-career-related-posts-container">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="beepo-career-related-post-header-title">Other stories you might be interested in</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<?php
								$related_post_ids = array();
								foreach($categories_post_ids as $category){
									array_push($related_post_ids, $category->term_id);
								}

								$related_post_ids_implode = implode(',', $related_post_ids);

								$args = array(
									'numberposts' => 3,
									'offset' => 0,
									'category' => $related_post_ids_implode ,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post__not_in' => array(get_the_ID()),
									'post_status' => 'publish',
									'suppress_filters' => true
								);
								$related_posts = wp_get_recent_posts( $args, ARRAY_A );
							?>
							<ul id="beepo-related-post-list" class="no-padding-list-start">
								<?php foreach( $related_posts as $recent ){?> 
										<li>
											<a href="<?php echo get_permalink($recent["ID"]); ?>">
												<article>
													<div class="beepo-related-post-img-container">
														<figure>
															<?php echo get_the_post_thumbnail( $recent["ID"], array( 395, 235), array( 'class' => 'related-featured-post-img' )  ); ?>
														</figure>
													</div>
													<h4 class="beepo-career-related-post-title"><?php  echo $recent["post_title"]; ?></h4>
												</article>												
											</a>
										</li>
								<?php } wp_reset_query(); ?> 
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer('beepo-two'); ?>