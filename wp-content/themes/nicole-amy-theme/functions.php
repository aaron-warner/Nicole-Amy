<?php

/* Actions  */
add_action('wp_enqueue_scripts', 'nav_enqueue_styles');
add_action('wp_enqueue_scripts', 'nav_enqueue_scripts');
add_action('after_setup_theme', 'nav_site_menus');

/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function nav_fixed_home_wp_title($title)
{
    if (empty($title) && (is_home() || is_front_page())) {
        $title = __('Home', 'textdomain') . ' | ' . get_bloginfo('description');
    }
    return $title;
}

/**
 * Enqueues styles for the theme.
 */
function nav_enqueue_styles()
{
    wp_enqueue_style('theme-screen-style', get_template_directory_uri() . '/public/css/style' . nav_get_asset_suffix() . '.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/node_modules/magnific-popup/dist/magnific-popup.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat');
}

/**
 *  Enqueues the scripts for the theme.
 */
function nav_enqueue_scripts()
{
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/public/js/theme' . nav_get_asset_suffix() . '.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/node_modules/magnific-popup/dist/jquery.magnific-popup.js', array('jquery'));
}

/**
 * Returns '.min' if Wordpress is not in DEBUG mode.
 *
 * Useful for including production files when DEBUG is off.
 *
 * @return string '.min' if Debug is on otherwise empty string.
 */
function nav_get_asset_suffix()
{
    return (defined('WP_DEBUG') && WP_DEBUG) ? '' : '.min';
}


/**
 *  Register navigation menus
 */
function nav_site_menus()
{
    register_nav_menu('main_navigation', 'Main Navigation');
}

/**
 *  Register Custom Settings
 */
add_action( 'admin_menu', 'custom_settings' );

function custom_settings() {
    add_options_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'my-unique-identifier', 'custom_settings_options' );
}

function custom_settings_options() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    echo '<div class="wrap">';
    echo '<h1>Custom Settings</h1>';
    echo '<form method="post" action="options.php"> ';
    settings_fields( 'section' );
    do_settings_sections( 'theme-options' );      
    submit_button(); 
    echo '</form>';
    echo '</div>';
}

function setting_email() { ?>
    <input type="email" name="email" id="email" value="<?php echo get_option( 'email' ); ?>" />
<?php }

function setting_address() { ?>
    <textarea rows="5" cols="50" name="address" id="address"><?php echo get_option('address'); ?></textarea>
<?php }

function setting_telephone() { ?>
    <input type="number" name="telephone" id="telephone" value="<?php echo get_option('telephone'); ?>" />
<?php }

function setting_facebook() { ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

function setting_instagram() { ?>
    <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
<?php }

function setting_pinterest() { ?>
    <input type="text" name="pinterest" id="pinterest" value="<?php echo get_option('pinterest'); ?>" />
<?php }

function setting_linkedin() { ?>
    <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
<?php }

function custom_settings_page_setup() {
    add_settings_section( 'section', 'All Settings', null, 'theme-options' );

    add_settings_field( 'email', 'Email Address', 'setting_email', 'theme-options', 'section' );
    add_settings_field( 'telephone', 'Telephone Number', 'setting_telephone', 'theme-options', 'section' );
    add_settings_field( 'address', 'Shop Address', 'setting_address', 'theme-options', 'section' );
    add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
    add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
    add_settings_field( 'pinterest', 'Pinterest URL', 'setting_pinterest', 'theme-options', 'section' );
    add_settings_field( 'linkedin', 'LinkedIn URL', 'setting_linkedin', 'theme-options', 'section' );

    register_setting( 'section', 'email' );
    register_setting( 'section', 'telephone' );
    register_setting( 'section', 'address' );
    register_setting( 'section', 'facebook' );
    register_setting( 'section', 'twitter' );
    register_setting( 'section', 'instagram' );
    register_setting( 'section', 'pinterest' );
    register_setting( 'section', 'linkedin' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );