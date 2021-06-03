<?php

// ================================= Create Custom Post Job Role Type =================================
function beepo_job_roles_custom_post() {
    $labels = array(
        'name'                => _x( 'Job Role', 'Post Type General Name', 'BEEPO_TEXT_DOMAIN' ),
        'singular_name'       => _x( 'Job Role', 'Post Type Singular Name', 'BEEPO_TEXT_DOMAIN' ),
        'menu_name'           => esc_html__( 'Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'parent_item_colon'   => esc_html__( 'Parent Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'all_items'           => esc_html__( 'All Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'view_item'           => esc_html__( 'View Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'add_new_item'        => esc_html__( 'Add New Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'add_new'             => esc_html__( 'Add New', 'BEEPO_TEXT_DOMAIN' ),
        'edit_item'           => esc_html__( 'Edit Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'update_item'         => esc_html__( 'Update Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'search_items'        => esc_html__( 'Search Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'not_found'           => esc_html__( 'Not Found', 'BEEPO_TEXT_DOMAIN' ),
        'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'BEEPO_TEXT_DOMAIN' ),
    );  
    $args = array(
        'label'               => esc_html__( 'job role', 'BEEPO_TEXT_DOMAIN' ),
        'description'         => esc_html__( 'Job Role', 'BEEPO_TEXT_DOMAIN' ),
        'labels'              => $labels,
        'supports'            => array( 'title','editor','thumbnail','revisions' ),
        'taxonomies'          => array( 'job-role-category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        // 'show_in_rest'        => true,
        'orderby'             => 'title',
        'order'               => 'ASC',
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-businessman',
        'can_export'          => true,
        'has_archive'         => __( 'job role' ),
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'show_admin_column'   => true,
        'capability_type'     => 'post',
        'rewrite' => array('slug' => 'job-role/%job-role-category%'),
    );
    register_post_type( 'job-roles', $args );
}
add_action( 'init', 'beepo_job_roles_custom_post', 0 );

// ================================= Custom Job Role Category Taxonomies =================================
function beepo_job_role_taxomonies() {  
    register_taxonomy(  
        'job-role-category',                      // This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'job-roles',                   //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Categories',   //Display name
            'query_var' => true,
            'has_archive' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'job-role-category'),
            'show_in_rest' => true, // where the magic happens
            'default_term'       => 'Other Roles'
        )  
    );  
}  
add_action( 'init', 'beepo_job_role_taxomonies');


function beepo_job_role_post_link( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'job-role-category' );
        if( $terms ){
            return str_replace( '%job-role-category%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'beepo_job_role_post_link', 1, 3 );


if ( ! class_exists( 'BEEPO_CTP_TAX_IMG_UPLOAD' ) ) {

class BEEPO_CTP_TAX_IMG_UPLOAD {

    public function __construct() {
    //
    }
 
     /*
      * Initialize the class and start calling our hooks and filters
      * @since 1.0.0
     */
    public function init() {
        add_action( 'job-role-category_add_form_fields', array ( $this, 'add_category_image' ), 10, 2 );
        add_action( 'created_job-role-category', array ( $this, 'save_category_image' ), 10, 2 );
        add_action( 'job-role-category_edit_form_fields', array ( $this, 'update_category_image' ), 10, 2 );
        add_action( 'edited_job-role-category', array ( $this, 'updated_category_image' ), 10, 2 );
        add_action( 'admin_enqueue_scripts', array( $this, 'load_media' ) );
        add_action( 'admin_footer', array ( $this, 'add_script' ) );
    }

    public function load_media() {
        wp_enqueue_media();
    }
     /*
      * Add a form field in the new category page
      * @since 1.0.0
     */
    public function add_category_image ( $taxonomy ) { ?>
        <div class="form-field term-group">
            <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
            <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
            <div id="category-image-wrapper"></div>
            <p>
            <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
            <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
            </p>
        </div>
        <?php
    }
 
     /*
      * Save the form field
      * @since 1.0.0
     */
    public function save_category_image ( $term_id, $tt_id ) {
        if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
            $image = $_POST['category-image-id'];
            add_term_meta( $term_id, 'category-image-id', $image, true );
        }
     }
 
     /*
      * Edit the form field
      * @since 1.0.0
     */
    public function update_category_image ( $term, $taxonomy ) { ?>
        <tr class="form-field term-group-wrap">
            <th scope="row">
                <label for="category-image-id"><?php _e( 'Image', 'hero-theme' ); ?></label>
            </th>
            <td>
                <?php $image_id = get_term_meta ( $term -> term_id, 'category-image-id', true ); ?>
                <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
                <div id="category-image-wrapper">
                    <?php if ( $image_id ) { ?>
                    <?php echo wp_get_attachment_image ( $image_id, 'thumbnail' ); ?>
                    <?php } ?>
                </div>
                <p>
                    <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
                    <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
                </p>
            </td>
        </tr>
        <?php
     }

    /*
     * Update the form field value
     * @since 1.0.0
     */
    public function updated_category_image ( $term_id, $tt_id ) {
        if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
            $image = $_POST['category-image-id'];
            update_term_meta ( $term_id, 'category-image-id', $image );
        } else {
            update_term_meta ( $term_id, 'category-image-id', '' );
        }
    }
/*
 * Add script
 * @since 1.0.0
 */
     public function add_script() { ?>
        <script>
            jQuery(document).ready( function($) {
                function ct_media_upload(button_class) {
                    var _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;
                    $('body').on('click', button_class, function(e) {
                        var button_id = '#'+$(this).attr('id');
                        var send_attachment_bkp = wp.media.editor.send.attachment;
                        var button = $(button_id);
                        _custom_media = true;
                        wp.media.editor.send.attachment = function(props, attachment){
                            if ( _custom_media ) {
                                $('#category-image-id').val(attachment.id);
                                $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
                                $('#category-image-wrapper .custom_media_image').attr('src',attachment.url).css('display','block');
                            } else {
                                return _orig_send_attachment.apply( button_id, [props, attachment] );
                            }
                        }
                        wp.media.editor.open(button);
                        return false;
                    });
                }
                ct_media_upload('.ct_tax_media_button.button'); 
                $('body').on('click','.ct_tax_media_remove',function(){
                $('#category-image-id').val('');
                $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
                });
                // Thanks: http://stackoverflow.com/questions/15281995/wordpress-create-category-ajax-response
                $(document).ajaxComplete(function(event, xhr, settings) {
                    var queryStringArr = settings.data.split('&');
                    if( $.inArray('action=add-tag', queryStringArr) !== -1 ){
                        var xml = xhr.responseXML;
                        $response = $(xml).find('term_id').text();
                        if($response!=""){
                            // Clear the thumb image
                            $('#category-image-wrapper').html('');
                        }
                    }
                });
            });
        </script>
        <?php 
    }
}
 
    $BEEPO_CTP_TAX_IMG_UPLOAD = new BEEPO_CTP_TAX_IMG_UPLOAD();
    $BEEPO_CTP_TAX_IMG_UPLOAD -> init();
}

// Add taxonomy filter
function beepo_add_custom_post_tax_filter() {
    global $typenow;
 
    // an array of all the taxonomyies you want to display. Use the taxonomy name or slug
    $taxonomies = array('job-role-category');
 
    // must set this to the post type you want the filter(s) displayed on
    if( $typenow == 'job-roles' ){
 
        foreach ($taxonomies as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            if(count($terms) > 0) {
                echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
                echo "<option value=''>Show All $tax_name</option>";
                foreach ($terms as $term) { 
                    echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
                }
                echo "</select>";
            }
        }
    }
}
add_action( 'restrict_manage_posts', 'beepo_add_custom_post_tax_filter' );
