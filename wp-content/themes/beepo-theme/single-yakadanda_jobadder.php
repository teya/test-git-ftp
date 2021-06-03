<?php get_header(); ?> 
	<main id="beepo-careers-job-role-profile-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="jobadder-title-container">
								<div class="jobadder-title-inner float-left">
									<?php 
										$terms = get_the_terms(get_the_ID(), 'yakadanda_jobadder_category' );
										$meta = get_post_meta(get_the_ID());
									?>
									<?php the_title( '<h1 class="job-entry-title">', '</h1>' ); ?>
									<!-- <p>Category: <?php echo $terms[0]->name; ?></p> -->
								</div>
								<a href="<?php echo $meta['yakadanda_jobadder_url_apply_url'][0] ?>" target="_blank" class="float-right"><button class="beepo-career-apply-now-btn">Apply now</button></a>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="jobadder-job-description-container">
								<div class="jobadder-job-description-inner">
									<div class="jobadder-overview-title">
										<p>Overview:</p>
									</div>
									<div class="jobadder-job-main-overview">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<a href="<?php echo $meta['yakadanda_jobadder_url_apply_url'][0] ?>" target="_blank" class="button-apply-now-buttom"><button class="beepo-career-apply-now-btn">Apply now</button></a>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; ?>
	</main>
<?php get_footer('beepo-two'); ?>