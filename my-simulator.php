<?php
/*
Plugin Name: My Simulator Plugin
Plugin URI: https://baghrous.com/my-simulator-plugin
Description: A plugin for performing calculations based on user input.
Version: 1.0
Author: Your Name
Author URI: https://baghrous.com
*/

function my_simulator_enqueue_scripts() {
}
add_action( 'wp_enqueue_scripts', 'my_simulator_enqueue_scripts' );

// Include the necessary files
require_once plugin_dir_path( __FILE__ ) . 'admin/settings.php';

// Activate the plugin
function my_simulator_activate() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'my_simulator_data';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        field_1 varchar(255) NOT NULL,
        field_2 varchar(255) NOT NULL,
        field_3 varchar(255) NOT NULL,
        field_4 varchar(255) NOT NULL,
        field_5 varchar(255) NOT NULL,
        field_6 varchar(255) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'my_simulator_activate' );

// Add a menu item in the WordPress admin dashboard
function my_simulator_add_menu() {
    add_menu_page(
        'My Simulator Plugin',
        'My Simulator',
        'manage_options',
        'my-simulator-plugin',
        'my_simulator_render_settings_page2',
        'dashicons-admin-generic',
        99
    );
}
add_action( 'admin_menu', 'my_simulator_add_menu' );
add_shortcode( 'my_simulator', 'my_simulator_shortcode' );
 function enqueue_my_simulator_scripts() {
    // Enqueue CSS
    wp_enqueue_style( 'my-simulator-style', plugin_dir_url( __FILE__ ) . '/assets/index-8fdfdfa4.css' );

    // Enqueue JavaScript
    wp_enqueue_script( 'my-simulator-script', plugin_dir_url( __FILE__ ) . '/assets/index-1452258a.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_simulator_scripts' );
//Create a shortcode for rendering the mySimulator component
function my_simulator_shortcode() {
    ob_start(); ?>

    <div id="my-simulator-app"></div>

    <?php
    return ob_get_clean();
}
// Render the settings page content
function my_simulator_render_settings_page2() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

        <?php settings_errors(); ?>

        <form method="post" action="options.php">
            <?php
                settings_fields( 'my_simulator_settings' );
                do_settings_sections( 'my_simulator_settings' );
                submit_button();
            ?>
        </form>
    </div>
    <?php
}
