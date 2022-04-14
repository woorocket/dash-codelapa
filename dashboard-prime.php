<?php
/**
 * Plugin Name: Marketing Prime
 * Plugin URI: https://mktprime.com/
 * Description: Customize wordpress dashboard
 * Author: Gabriel Lapa
 * Author URI: https://mktprime.com/
 * Version: 1.0
 * Requires at least: 4.4
 * Tested up to: 5.8
 * WC requires at least: 2.6
 * WC tested up to: 5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'SMDFW_DIR', plugin_dir_path( __FILE__ ) );

add_action('admin_head', 'custom_changes_css');

function custom_changes_css() {
  echo '<style>
  div#flatsome-notice {
    display: none;
}

  
  
  </style>';
}

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://mktprime.com/wp-content/uploads/2021/11/Marketing-Prime.svg);
		height:65px;
		width:320px;
		    background-size: 220px 94px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
		
		
	.wp-core-ui .button-primary {
    background: #e31678 !important;
    border-color: #e11678 !important;
}
		p#backtoblog {
    display: none;
}
		.login form {
    margin-top: 20px;
    margin-left: 0;
    padding: 50px 20px !important;
    font-weight: 400;
    overflow: hidden;
    background: #fff;
    box-shadow: 9px 9px 0px rgb(59 59 59);
    border-radius: 15px;
    border: none !important;
}
		
		
		body.login.js.login-action-.wp-core-ui {
    background-image: linear-gradient(
178deg
, #e01678, black) !important;
}
		
		body.login.js.login-action-login {
    background: #f1ca4e;
}
		body.login.js.login-action-login {
    background: #f1ca4e;
    background-image: linear-gradient(359deg, #0000008f, transparent);
}
		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );




//changing the url on the logo to redirect them
function mb_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'https://mktprime.com/' );




function dashboard_logo() {
    echo '
        <style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo>.ab-item {
    padding: 0 7px;
    background-image: url(https://mktprime.com/wp-content/uploads/2021/11/Marketing-Prime.svg) !important;
    background-size: 70%;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0.8;
}
#wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
    content: " ";
    top: 2px;
}
        </style>
    ';
}
add_action('wp_before_admin_bar_render', 'dashboard_logo');






function my_admin_menu() {

add_menu_page(

__( 'Sample page', 'my-textdomain' ),

__( 'Sample menu', 'my-textdomain' ),

'manage_options',

'sample-page',

'my_admin_page_contents',

'dashicons-schedule',

3

);

}



add_action( 'admin_menu', 'my_admin_menu' );



function my_admin_page_contents() {

?>

<h1>

<?php esc_html_e( 'Welcome to my custom admin page.', 'my-plugin-textdomain' ); ?>

</h1>

<?php

}



function register_my_plugin_scripts() {

wp_register_style( 'my-plugin', plugins_url( 'ddd/css/plugin.css' ) );

wp_register_script( 'my-plugin', plugins_url( 'ddd/js/plugin.js' ) );

}



add_action( 'admin_enqueue_scripts', 'register_my_plugin_scripts' );



function load_my_plugin_scripts( $hook ) {

// Load only on ?page=sample-page

if( $hook != 'toplevel_page_sample-page' ) {

return;

}

// Load style & scripts.

wp_enqueue_style( 'my-plugin' );

wp_enqueue_script( 'my-plugin' );

}



add_action( 'admin_enqueue_scripts', 'load_my_plugin_scripts' );

