<?php 

/* ----------------------------------------------------------------------------- */
/* Add Menu Page */
/* ----------------------------------------------------------------------------- */ 

function add_my_menu() {
    add_menu_page (
        'Beepo Career Theme Option', // page title 
        'Theme Options', // menu title
        'manage_options', // capability
        'my-menu-slug',  // menu-slug
        'my_menu_page',   // function that will render its output
        '',   // link to the icon that will be displayed in the sidebar
        60 //$position,    // position of the menu option
    );
}
add_action('admin_menu', 'add_my_menu');

function my_menu_page() {
        ?>
        <?php  
        if( isset( $_GET[ 'tab' ] ) ) {  
            $active_tab = $_GET[ 'tab' ];  
        } else {
            $active_tab = 'homepage_tab';
        }
        ?>  
        <div class="wrap">
            <h2>Beepo Careers Theme Options</h2>
            <div class="description">Theme options for Beepo Careers</div>
            <?php settings_errors(); ?> 
            <h2 class="nav-tab-wrapper">  
                <a href="?page=my-menu-slug&tab=homepage_tab" class="nav-tab <?php echo $active_tab == 'homepage_tab' ? 'nav-tab-active' : ''; ?>">Home Page</a>  
                <a href="?page=my-menu-slug&tab=tab_two" class="nav-tab <?php echo $active_tab == 'tab_two' ? 'nav-tab-active' : ''; ?>">Contact Page</a>  
            </h2>  
            <form method="post" action="options.php"> 
            <?php
                if( $active_tab == 'homepage_tab' ) {  
                    settings_fields( 'homepage-settings' );
                    do_settings_sections( 'my-menu-slug-1' );
                } else if( $active_tab == 'tab_two' )  {

                    settings_fields( 'setting-group-2' );
                    do_settings_sections( 'my-menu-slug-2' );
                }
            ?>
                <?php submit_button(); ?> 
            </form> 
        </div>
        <?php
}

/* ----------------------------------------------------------------------------- */
/* Setting Sections And Fields */
/* ----------------------------------------------------------------------------- */ 

function beepo_career_initialize_theme_options() {  
    add_settings_section(  
        'homepage_role_profiles_section',         // ID used to identify this section and with which to register options  
        'Role Profiles',                  // Title to be displayed on the administration page  
        'homepage_role_profiles_section_callback', // Callback used to render the description of the section  
        'my-menu-slug-1'                           // Page on which to add this section of options  

    );

    add_settings_section(  
        'homepage_bottom_section',         // ID used to identify this section and with which to register options  
        'Homepage Bottom Contents',                  // Title to be displayed on the administration page  
        'homepage_bottom_section_callback', // Callback used to render the description of the section  
        'my-menu-slug-1'                           // Page on which to add this section of options  

    );

    add_settings_section(  
        'contact_details_section',         // ID used to identify this section and with which to register options  
        'Contact Details',                  // Title to be displayed on the administration page  
        'contact_details_section_callback', // Callback used to render the description of the section  
        'my-menu-slug-2'                           // Page on which to add this section of options  
    );

    /* ----------------------------------------------------------------------------- */
    /* Homepage Options */
    /* ----------------------------------------------------------------------------- */ 

    add_settings_field (   
        'role_profile_section_title',                      // ID used to identify the field throughout the theme  
        'Role Profile Title',                           // The label to the left of the option interface element  
        'role_profile_section_title_callback',   // The name of the function responsible for rendering the option interface  
        'my-menu-slug-1',                          // The page on which this option will be displayed  
        'homepage_role_profiles_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            '',
        )  
    );  

    add_settings_field (   
        'role_profile_btn_label',                      // ID used to identify the field throughout the theme  
        'Role Profile Button Label',                           // The label to the left of the option interface element  
        'role_profile_btn_label_callback',   // The name of the function responsible for rendering the option interface  
        'my-menu-slug-1',                          // The page on which this option will be displayed  
        'homepage_role_profiles_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            '',
        )  
    );  

    add_settings_field (   
        'role_profile_btn_link',                      // ID used to identify the field throughout the theme  
        'Role Profile Button Link',                           // The label to the left of the option interface element  
        'role_profile_btn_link_callback',   // The name of the function responsible for rendering the option interface  
        'my-menu-slug-1',                          // The page on which this option will be displayed  
        'homepage_role_profiles_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            '',
        )  
    );  

    add_settings_field (   
        'homepage_bottom_contents',                      // ID used to identify the field throughout the theme  
        'Homepage Bottom Contents',                           // The label to the left of the option interface element  
        'homepage_bottom_contents_callback',   // The name of the function responsible for rendering the option interface  
        'my-menu-slug-1',                          // The page on which this option will be displayed  
        'homepage_bottom_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            '',
        )  
    );  

    add_settings_field (   
        'homepage_bottom_btn_label',                      // ID used to identify the field throughout the theme  
        'Homepage Bottom Bottom Label',                           // The label to the left of the option interface element  
        'homepage_bottom_btn_label_callback',   // The name of the function responsible for rendering the option interface  
        'my-menu-slug-1',                          // The page on which this option will be displayed  
        'homepage_bottom_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            '',
        )  
    );  

    add_settings_field (   
        'homepage_bottom_btn_link',                      // ID used to identify the field throughout the theme  
        'Homepage Bottom Bottom Link',                           // The label to the left of the option interface element  
        'homepage_bottom_btn_link_callback',   // The name of the function responsible for rendering the option interface  
        'my-menu-slug-1',                          // The page on which this option will be displayed  
        'homepage_bottom_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            '',
        )  
    );  

    register_setting(  
        //~ 'my-menu-slug',  
        'homepage-settings',  
        'role_profile_section_title'  
    );

    register_setting(  
        //~ 'my-menu-slug',  
        'homepage-settings',  
        'role_profile_btn_label'  
    );

    register_setting(  
        //~ 'my-menu-slug',  
        'homepage-settings',  
        'role_profile_btn_link'  
    );

    register_setting(  
        //~ 'my-menu-slug',  
        'homepage-settings',  
        'homepage_bottom_contents'  
    );

    register_setting(  
        //~ 'my-menu-slug',  
        'homepage-settings',  
        'homepage_bottom_btn_label'  
    );

    register_setting(  
        //~ 'my-menu-slug',  
        'homepage-settings',  
        'homepage_bottom_btn_link'  
    );

    /* ----------------------------------------------------------------------------- */
    /* Contact Us Page */
    /* ----------------------------------------------------------------------------- */     

    add_settings_field (   
        'beepo_careers_contact_complete_address',  // ID -- ID used to identify the field throughout the theme  
        'Complete Address', // LABEL -- The label to the left of the option interface element  
        'beepo_careers_contact_complete_address_callback', // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface  
        'my-menu-slug-2', // MENU PAGE SLUG -- The page on which this option will be displayed  
        'contact_details_section', // SECTION ID -- The name of the section to which this field belongs  
        array( // The array of arguments to pass to the callback. In this case, just a description.  
            '', // DESCRIPTION -- The description of the field.
        )  
    );

    add_settings_field (   
        'beepo_careers_contact_email',  // ID -- ID used to identify the field throughout the theme  
        'Email', // LABEL -- The label to the left of the option interface element  
        'beepo_careers_contact_email_callback', // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface  
        'my-menu-slug-2', // MENU PAGE SLUG -- The page on which this option will be displayed  
        'contact_details_section', // SECTION ID -- The name of the section to which this field belongs  
        array( // The array of arguments to pass to the callback. In this case, just a description.  
            '', // DESCRIPTION -- The description of the field.
        )  
    ); 

    add_settings_field (   
        'beepo_careers_contact_numbers',  // ID -- ID used to identify the field throughout the theme  
        'Contact Numbers', // LABEL -- The label to the left of the option interface element  
        'beepo_careers_contact_numbers_callback', // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface  
        'my-menu-slug-2', // MENU PAGE SLUG -- The page on which this option will be displayed  
        'contact_details_section', // SECTION ID -- The name of the section to which this field belongs  
        array( // The array of arguments to pass to the callback. In this case, just a description.  
            '', // DESCRIPTION -- The description of the field.
        )  
    );     

    add_settings_field (   
        'beepo_careers_contact_bottom_contents',  // ID -- ID used to identify the field throughout the theme  
        'Contact Bottom Contents', // LABEL -- The label to the left of the option interface element  
        'beepo_careers_contact_bottom_contents_callback', // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface  
        'my-menu-slug-2', // MENU PAGE SLUG -- The page on which this option will be displayed  
        'contact_details_section', // SECTION ID -- The name of the section to which this field belongs  
        array( // The array of arguments to pass to the callback. In this case, just a description.  
            '', // DESCRIPTION -- The description of the field.
        )  
    );  

    register_setting(  
        'setting-group-2',  
        'beepo_careers_contact_complete_address'  
    );

    register_setting(  
        'setting-group-2',  
        'beepo_careers_contact_email'  
    );

    register_setting(  
        'setting-group-2',  
        'beepo_careers_contact_numbers'  
    );

    register_setting(  
        'setting-group-2',  
        'beepo_careers_contact_bottom_contents'  
    );

} // function beepo_career_initialize_theme_options
add_action('admin_init', 'beepo_career_initialize_theme_options');

function homepage_role_profiles_section_callback() {  
    echo '<p></p>';  
} // function page_1_section_callback
function homepage_bottom_section_callback() {  
    echo '<p></p>';  
} // function page_1_section_callback
function contact_details_section_callback() {  
    echo '<p></p>';  
} // function page_1_section_callback

/* ----------------------------------------------------------------------------- */
/* Homepage Field Callbacks */
/* ----------------------------------------------------------------------------- */ 


function role_profile_section_title_callback($args) {  
    ?>
    <input type="text" id="role_profile_section_title" class="role_profile_section_title" name="role_profile_section_title" value="<?php echo get_option('role_profile_section_title') ?>">
    <p class="role_profile_section_title"> <?php echo $args[0] ?> </p>
    <?php      
} 

function role_profile_btn_label_callback($args) {  
    ?>
    <input type="text" id="role_profile_btn_label" class="role_profile_btn_label" name="role_profile_btn_label" value="<?php echo get_option('role_profile_btn_label') ?>">
    <p class="description role_profile_btn_label"> <?php echo $args[0] ?> </p>
    <?php      
} 

function role_profile_btn_link_callback($args) {  
    ?>
    <input type="text" id="role_profile_btn_link" class="role_profile_btn_link" name="role_profile_btn_link" value="<?php echo get_option('role_profile_btn_link') ?>">
    <p class="description role_profile_btn_link"> <?php echo $args[0] ?> </p>
    <?php      
} 

function homepage_bottom_contents_callback($args) {  
    ?>
    <textarea id="homepage_bottom_contents" class="homepage_bottom_contents" name="homepage_bottom_contents" rows="5" cols="50"><?php echo get_option('homepage_bottom_contents') ?></textarea>
    <p class="description"> <?php echo $args[0] ?> </p>
    <?php      
} 

function homepage_bottom_btn_label_callback($args) {  
    ?>
    <input type="text" id="homepage_bottom_btn_label" class="homepage_bottom_btn_label" name="homepage_bottom_btn_label" value="<?php echo get_option('homepage_bottom_btn_label') ?>">
    <p class="description homepage_bottom_btn_label"> <?php echo $args[0] ?> </p>
    <?php      
} 


function homepage_bottom_btn_link_callback($args) {  
    ?>
    <input type="text" id="homepage_bottom_btn_link" class="homepage_bottom_btn_link" name="homepage_bottom_btn_link" value="<?php echo get_option('homepage_bottom_btn_link') ?>">
    <p class="description homepage_bottom_btn_link"> <?php echo $args[0] ?> </p>
    <?php      
} 

/* ----------------------------------------------------------------------------- */
/* Contact Us Page Field Callbacks */
/* ----------------------------------------------------------------------------- */ 

function beepo_careers_contact_complete_address_callback($args) {  
    ?>
    <textarea id="beepo_careers_contact_complete_address" class="beepo_careers_contact_complete_address" name="beepo_careers_contact_complete_address" rows="5" cols="50"><?php echo get_option('beepo_careers_contact_complete_address') ?></textarea>
    <p class="description beepo_careers_contact_complete_address"> <?php echo $args[0] ?> </p>
    <?php      
} 

function beepo_careers_contact_email_callback($args) {  
    ?>
    <input type="text" id="beepo_careers_contact_email" style="width: 330px;" class="beepo_careers_contact_email" name="beepo_careers_contact_email" value="<?php echo get_option('beepo_careers_contact_email') ?>">
    <p class="description beepo_careers_contact_email"> <?php echo $args[0] ?> </p>
    <?php      
} 


function beepo_careers_contact_numbers_callback($args) {  
    ?>
    <textarea id="beepo_careers_contact_numbers" class="beepo_careers_contact_numbers" name="beepo_careers_contact_numbers" rows="5" cols="50"><?php echo get_option('beepo_careers_contact_numbers') ?></textarea>
    <p class="description beepo_careers_contact_numbers"> <?php echo $args[0] ?> </p>
    <?php      
} 

function beepo_careers_contact_bottom_contents_callback($args) {  
    ?>
    <textarea id="beepo_careers_contact_bottom_contents" class="beepo_careers_contact_bottom_contents" name="beepo_careers_contact_bottom_contents" rows="5" cols="50"><?php echo get_option('beepo_careers_contact_bottom_contents') ?></textarea>
    <p class="description beepo_careers_contact_bottom_contents"> <?php echo $args[0] ?> </p>
    <?php      
} 

?>