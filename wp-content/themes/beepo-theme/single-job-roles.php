<?php get_header('beepo-three'); ?>
	<main id="beepo-single-job-profile-container" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<div class="main-header-banner">
					<?php $terms = get_the_terms( get_the_ID() , 'job-roles' ); ?>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<?php if (has_post_thumbnail( get_the_ID() ) ): ?>
									<figure class="role-profile-featured-img">
										<?php the_post_thumbnail(array(80, 80)); ?>
									</figure>
								<?php else: ?>
									<figure class="role-profile-featured-img">
										<img width="80" height="80" 
										src="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon80x80.png" 
										class="attachment-80x80 size-80x80 wp-post-image smush-detected-img smush-image-1" 
										alt="" 
										srcset="<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon150x150.png 150w,
										<?php echo get_template_directory_uri(); ?>/images/role-profile-single/default-job-role-icon200x200.png 200w" sizes="(max-width: 80px) 100vw, 80px">
									</figure>			
								<?php endif; ?>
								<div class="job-profile-title-container">
									<h1 class="job-profile-title"><?php the_title(); ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="job-profile-content-container">
					<div class="job-profile-content">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_content(); ?>
								</div>
							</div>							
						</div>
					</div>	
					<div class="search-for-job-link-container">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<a class="beepo-btn orange-btn" href="<?php echo get_home_url(); ?>/find-your-dream-job/">Search for current openings&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>					
					</div>
				</div>				
			</article>
		<?php endwhile; ?>
	</main>
<?php get_footer('beepo-three'); ?>