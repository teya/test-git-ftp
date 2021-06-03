<?php
/**
 * Template Name: Role Profiles
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */

// if show all is set
if( isset($_GET['showall']) ):

    $args = array( 'hide_empty' => 0 );

else:
// else show paged
    $page = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
    $currentpage = $page;
    // number of tags to show per-page
    $per_page = 9;
    $offset = ( $page-1 ) * $per_page;
    $args = array( 'number' => $per_page, 'orderby ' => 'name', 'offset' => $offset, 'hide_empty' => 1 );

endif;
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
						<?php
							$taxonomy = 'job-role-category';
							$tax_terms = get_terms( $taxonomy, $args );
						?>
						<ul id="beepo-career-role-profiles-list" class="no-padding-list-start">
							<?php

								foreach ($tax_terms as $tax_term) {
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
							    	$beepo_career_role_profiels_list = '';

								    // The Loop
								    if ( $the_query->have_posts() ) {
								        $beepo_career_role_profiels_list = '<ul class="beepo-career-list-jobs beepo-career-clear-floats">';
								        $html_list_items = '';
								        while ( $the_query->have_posts() ) {
								            $the_query->the_post();
								            $beepo_career_role_profiels_list .= '<li>';
								            $beepo_career_role_profiels_list .= '<a href="' . get_permalink() . '">';
								            $beepo_career_role_profiels_list .= get_the_title() . '&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>';
								            $beepo_career_role_profiels_list .= '</a>';
								            $beepo_career_role_profiels_list .= '</li>';
								        }
								        $beepo_career_role_profiels_list .= '</ul>';
								    } else {
								        
								    }
    								wp_reset_postdata();

									$query = new WP_Query( $args );

									echo '<li class="beepo-career-role-items">
											<div class="beepo-career-role-profile-container">
												<div class="beepo-career-header-category-title">
													<h2>'.$tax_term->name.'</h2>
												</div>
												<div class="beepo-career-list-jobs-container">
														'.$beepo_career_role_profiels_list.'
												</div>								
											</div>
										 </li>';
								}
							?>
						</ul>
						<?php
						  	$total_terms = wp_count_terms( 'role-profiles', array('hide_empty' => 1) );
							$pages = ceil($total_terms/$per_page);
						?>
						<div class="pagination">
						    <?php 
						        echo paginate_links( array(
						            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
						            'total'        => $pages,
						            'current'      => max( 1, get_query_var( 'paged' ) ),
						            'format'       => '?paged=%#%',
						            'show_all'     => false,
						            'type'         => 'plain',
						            'end_size'     => 2,
						            'mid_size'     => 1,
						            'prev_next'    => true,
						            'prev_text'    => sprintf( '<i></i> %1$s', __( '&larr;', 'text-domain' ) ),
						            'next_text'    => sprintf( '%1$s <i></i>', __( '&rarr;', 'text-domain' ) ),
						            'add_args'     => false,
						            'add_fragment' => '',
						        ) );
						       wp_reset_postdata();
						    ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer('beepo-two'); ?>