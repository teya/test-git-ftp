<?php
/**
 * Template Name: Simple Template
 *
 * @package WordPress
 * @subpackage Beepo_Career
 * @since Beepo Career 1.0
 */
?>
<?php
    $postid = get_the_ID();
    $image = 'https://beepo.com.ph/wp-content/themes/beepo-theme/images/Live-webinar-grassroots-banner-img.jpg';

    if (has_post_thumbnail( $postid ) ):
        $image = wp_get_attachment_url( get_post_thumbnail_id($postid), 'full' );
    endif;
?>

<?php get_header('beepo-three'); ?>
<div class="beepo-simple-page-container" id="webinar-beepo-career-page-container">
    <div class="beepo-career-page-header-container" id="<?php echo $postid; ?>-beepo-career-page-header-container" style="background-image: url('<?php echo $image; ?>');">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header-main-title-container">
                        <div class="header-page-title-wrapper">
                            <div class="page-header section-header">
                                <h1>
                                    <div class="webinar-page-title text-uppercase"><?php the_title(); ?></span></div>
                                </h1>
                            </div>
                        </div> <!-- header-page-title-wrapper -->
                    </div> <!-- header-main-title-container -->
                </div>
            </div>
        </div>
    </div> <!-- beepo-career-page-header-container -->
    <div id="<?php echo $postid; ?>-page-container" class="page-content-container">
        <div class="container">
            <div id="contact-from-container">
                <?php the_content(); ?>	
            </div> <!-- contact-from-container -->
        </div>
    </div>
</div> <!-- beepo-career-page-container -->
<?php get_footer('beepo-three'); ?>