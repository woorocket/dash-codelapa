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
#menu-management .menu-edit, #menu-settings-column .accordion-container, .comment-ays, .feature-filter, .imgedit-group, .manage-menus, .menu-item-handle, .popular-tags, .stuffbox, .widget-inside, .widget-top, .widgets-holder-wrap, .wp-editor-container, p.popular-tags, table.widefat {
    
    border-radius: 10px;
}


#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    background: #ff187c;
    
}


a.update-link {
    background-color: #7db372;
    padding: 3px 10px;
    text-decoration: none !important;
    color: white;
    border-radius: 5px;
}


:root {
    --wp-admin-theme-color: #ff187c;
   
    --wp-admin-theme-color-darker-10: #ff187c;
 
    --wp-admin-theme-color-darker-20: #ff187c;
    
    --wp-admin-border-width-focus: 2px;
}




button#app-save-button {
    background-color: #e21678 !important;
}



table.wp-list-table.widefat.fixed.striped.table-view-list.pages a {
    color: #372d50 !important;
}


#wpadminbar .ab-top-menu>.menupop>.ab-sub-wrapper {
    min-width: 100%;
    border-radius: 10px;
    margin-top: 5px;
}

#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
   
    background: #372d50;
 
}

.view-body {
    background-color: #372d50 !important;
}



div#wpfooter {
    display: none;
}


#wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input {
    height: 42px;
   
}

.postbox {
  
    border-radius: 10px;
   
}

.wp-core-ui .button-primary {
    
    color: white !important;
}

.wp-core-ui .button-primary {
    background: #370d68 !important;
    border-color: #370d68 !important;
    color: white !important;
}

.notice-success, div.updated {
    border-left-color: #ff187c;
}

.attachments-wrapper .thumbnail {
    border-radius: 15px;
}


.attachment-preview.js--select-attachment.landscape:hover {
    box-shadow: 1px 2px 9px #0000007a;
    transition: 0.5s;
}


#adminmenu .wp-submenu {
   
    left: 122px;
   
   
    border-radius: 5px;
  
}


.wp-core-ui .attachment-preview {
    position: relative;
    box-shadow: 1px 2px 8px rgb(0 0 0 / 10%), inset 0 0 0 1px rgb(0 0 0 / 5%);
    background: #f0f0f1;
    cursor: pointer;
    border-radius: 15px !important;
}


#wpcontent, #wpfooter {
    margin-left: 100px;
}

#adminmenu a {
   
    color: #f0f0f1;
}

a:hover {
    color: #ff187c !important;
}




.wp-core-ui .button, .wp-core-ui .button-secondary {
    color: #000000;
    border-color: #00000000 !important;
    background: #d7d7d7 !important;
    vertical-align: top;
    box-shadow: 1px 1px 3px #00000014;
}

.wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover {
    background: #FF187B !important;
    border-color: #00000000 !important;
    color: #ffffff !important;
    box-shadow: 1px 1px 9px #00000052;
}



#screen-meta {
   
    margin: 20px 20px -1px 20px;
  
}

#screen-meta-links {
    float: right;
    margin: 10px;
}

.wrap {
    margin: 10px 20px 0 20px;
}

.about-wrap {
    position: relative;
    margin: 25px 20px 0 20px;
    max-width: 1300px;
    font-size: 14px;
}

  
  div#setting-error-tgmpa {
    display: none;
}
  #wpadminbar .ab-empty-item, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon {
    color: #000000;
    font-weight: 600 !important;
}
  
  #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
    width: 120px;
    background-color: #372d50;
}

#wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before {
    color: #a7aaad;
    color: #ff187c !important;
}

#wpadminbar {
   
    font-weight: 600;
   
}

.wp-core-ui .button-primary {
    background: #370d68 !important;
    border-color: #370d68 !important;
    
}


.rank-math-icon g {
    fill: #ff187c !important;
}

  
  #wpadminbar {
   
   
    height: 42px;
   
    background: #ffffff;
}
  
 #adminmenu div.wp-menu-image:before {
    color: rgb(255 255 255) !important;
} 

.dashicons, .dashicons-before:before {
   
    font-size: 15px;
   
}


.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
    background: #ff187c !important;
    border-color: #ff187c !important;
    box-shadow: 1px 1px 7px #00000061;
    color: #fff;
}


#adminmenu .wp-submenu-head, #adminmenu a.menu-top {
    font-size: 12px;
    
}


#Logo-white g#Group {
    fill: #ff187c !important;
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

