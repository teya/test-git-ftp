<?php
/**
 * Template Name: Job Listing
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */

$paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
$per_page = 6;
$search_string = (isset($_GET['search']))? $_GET['search'] : '';

$query_by_cat = '';

if(isset($_GET['beepo-job-category']) && $_GET['beepo-job-category'] != 0){
	$cat_search_id = $_GET['beepo-job-category'];
	$cat_slug =  get_cat_slug($cat_search_id);
	$query_by_cat = array(
        array(
            'taxonomy' => 'yakadanda_jobadder_category',
            'field' => 'slug',
            'terms' => $cat_slug 
        )
    );
}
?>
<?php get_header(); ?>
	<main id="role-profiles-page" role="main">
		<section>
			<div id="role-profiles-top-contents">
				<div class="container">
					<div class="row"> 
						<div class="col-lg-12">
							<h1><?php wp_title(''); ?></h1>
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
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="beepo-search-job-form-container">
							<?php
								$job_categories_args = array(
								   'taxonomy' => 'yakadanda_jobadder_category',
								   'orderby' => 'name',
								   'order'   => 'ASC'
								);
								$job_categories = get_categories($job_categories_args);
							?>
							<form id="beepo-search-job-form" action="<?php echo $_SERVER['PHP_SELF']; ?>/careers/job-listing" role="search">
								<input class="search-job-form-keyword beepo-input-text-search" type="text" name="search" id="search" value="<?php echo $search_string; ?>" placeholder="Search by keyword...">
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
								<input class="beepo-career-gray-btn float-right" type="submit" id="searchsubmit" value="Go">
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div id="beepo-career-job-listing-container">
							<?php
								$args = array(
									'post_type' => 'yakadanda_jobadder',
									'post_status' => 'publish',
								    'orderby'        => 'title',
								    'order'          => 'ASC',
									'posts_per_page' => $per_page,
									'paged'	=> $paged,
									's' => $search_string,
									'ignore_sticky_posts'=> true,
  									'tax_query' => $query_by_cat
								);
								$my_query = new WP_Query($args);
							?>
							<ul id="beepo-career-job-listing" class="no-padding-list-start">
								<?php if( $my_query->have_posts() ){?>
									<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<?php
											$post_ID = get_the_ID();
											$terms = get_the_terms($post_ID, 'yakadanda_jobadder_category' );
											$meta = get_post_meta($post_ID);
										?>
										<li id="beepo_career_job_item_<?php echo $post_ID; ?>" class="beepo_career_job_item">
											<div class="top-job-title-section beepo-career-clear-floats">
												<div class="top-job-title-left-section float-left">
													<a href="<?php the_permalink(); ?>" ><h2><?php the_title(); ?></h2><span class="beepo-career-job-category"><?php echo $terms[0]->name; ?></span></a>
												</div>
												<div class="top-job-title-right-section float-right">
													<a href="<?php echo $meta['yakadanda_jobadder_url_apply_url'][0] ?>" target="_blank" class="beepo-career-apply-btn-outer"><button class="beepo-career-apply-btn">Apply</button></a>
												</div>
											</div>
											<div class="beepo-job-title-short-description">
												<?php echo $meta['yakadanda_jobadder_textareasmall_summary'][0]; ?>
											</div>
										</li>
									<?php endwhile; ?>
								<?php
									}else{;
										echo '<li class="no-results">There are no jobs matching your search.</li>';
									}
								?>
							</ul>
							<div class="pagination">
							    <?php 
							        echo paginate_links( array(
							            'base'         => strtok(str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ))), '?'),
							            'total'        => $my_query->max_num_pages,
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
						</div> <!-- END #beepo-career-job-listing-container -->
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer('beepo-two'); ?>


