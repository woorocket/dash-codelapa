<?php
/**
 * Plugin Name: CodeLapa
 * Plugin URI: https://codelapa.com.br
 * Description: Customize wordpress dashboard
 * Author: Gabriel Lapa
 * Author URI: https://codelapa.com.br
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

add_action('admin_head', 'customizar_painel');

function customizar_painel() {
  echo '<style>
  div#auto_post_redirection {
    display: none !important;
}
  
  div#auto_post_redirection {
    display: none;
}
  div#setting-error-tgmpa {
    display: none;
}
.notice.is-dismissible.pys-optin-notice.pys-notice-wrapper {
    display: none;
}
.updated.success.fs-notice.fs-has-title.fs-slug-wpcf7-redirect.fs-type-plugin {
    display: none !important;
}
div#aiowps-dashnotice {
    display: none;
}
div#awcfe_notice {
    display: none;
}

div#setting-error-tgmpa {
    display: none !important;
}
@media only screen and (max-width: 600px) {

ul#wp-admin-bar-root-default {
    display: block !important !important;
}
ul#wp-admin-bar-root-default {
    visibility: visible !important;
    position: inherit !important;
}
div#wpbody {
    padding-top: 55px !important;
}

}
ul#adminmenu {
    padding-top: 30px;
}

@media screen and (min-width: 800px) {
  


.opensub ul.wp-submenu.wp-submenu-wrap {
    background-color: #232546 !important;
    border-radius: 6px;
    box-shadow: -3px 3px 0px white !important;
}





tr[data-slug="woorocket"] {
    display: none;
}


div#flatsome-notice {
display: none;
}
.page div#wpadminbar {
    display: block !important;
}
div#minor-publishing-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.updraft-ad-container.updated {
display: none !important;
}
div#setting-error-tgmpa {
display: none;
}
li#wp-admin-bar-flatsome_panel_license {
display: none !important;
}
.toplevel_page_flatsome-panel ul.wp-submenu li:nth-child(3) {
display: none;
}
.flatsome-panel form {
display: none !important;
}
button.button.save_order.button-primary {
    background-color: #009688 !important;
}
.woocommerce-message {
    display: none;
}


.wp-core-ui .button-primary {
    background: #3b76e1 !important;
    border-color: #3b76e1 !important;
  
}
.wp-core-ui .button, .wp-core-ui .button-secondary {
  ;
    font-size: 90%;
}
div#screen-meta {
    border-radius: 10px;
    margin-bottom: 5px;
    border: 2px solid #bbbbbb;
    background-color: #ffffff00;
    color: #585858;
}

.wp-core-ui .button, .wp-core-ui .button-secondary {
   
   
    border: none;
    box-shadow: 1px 2px #0000004a;
    font-weight: 700;
}
#screen-meta-links .show-settings {
    border-radius: 6px;
    border: 2px solid #bbbbbb;
    background-color: #ffffff00;
    color: #6e6e6e;
}
.wp-core-ui .button-secondary:hover, .wp-core-ui .button.hover, .wp-core-ui .button:hover {
    background: #e21678;
    border-color: #e21678;
    color: #ffffff;
}

#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap, #adminmenu .wp-submenu, body {
    
    background-color: #040622;
	
}




   

input#publish {
    background-color: #009688 !important;
}
div#wpbody {
    background-color: #f1f3f7;
    padding: 50px 10px;
	 background-color: #f1f3f7;
	
}

.postbox {
    border-radius: 15px;
    box-shadow: -1px 1px 8px #0000001c;
    border: none;
	  transition:0.6s;
	  padding: 10px 5px;
}

#adminmenu a {
   
    color: #707182;
}
body {
  
    font-family: "Work Sans", sans-serif !important;
	letter-spacing: 0.6px;
   
}

#adminmenu .wp-submenu-head, #adminmenu a.menu-top {
    font-size: 13px;
   
}

button.btn-ajuda {
    background-color: #3b76e1;
    color: white;
    border: none;
    border-radius: 5px;
    display: block;
    text-decoration: none !important;
    margin: 10px 0px;
    font-size: 70%;
    padding: 5px 20px;
}
#adminmenu .awaiting-mod, #adminmenu .menu-counter, #adminmenu .update-plugins {
 
    background-color: #3b76e1;
  
}

.wrap .add-new-h2, .wrap .add-new-h2:active, .wrap .page-title-action, .wrap .page-title-action:active {
    border-radius: 5px;
    color: #040622;
    border: none;
    background-color: white;
    box-shadow: 2px 3px 0px #00000057;
	  transition:0.6s;
}
#menu-management .menu-edit, #menu-settings-column .accordion-container, .comment-ays, .feature-filter, .imgedit-group, .manage-menus, .menu-item-handle, .popular-tags, .stuffbox, .widget-inside, .widget-top, .widgets-holder-wrap, .wp-editor-container, p.popular-tags, table.widefat {
    
    border: none;
    box-shadow: -1px 1px 8px #0000001c;
	border-radius: 15px;
}

div#wpfooter {
    display: none;
}

a {
    color: #040622;
  
}




::-webkit-scrollbar 

::-webkit-scrollbar-track {
    background-color: #F4F4F4;
	padding:20px;

}
::-webkit-scrollbar {
    width: 10px;
    background: #F4F4F4;
}
::-webkit-scrollbar-thumb {
    background: #040622;
    border-radius: 100px;
}

thead {
    height: 60px;
}

html.wp-toolbar {
    padding-top: 0px;
}



ul#adminmenu:before {
    content: "";
    background-image: url(https://codelapa.com/wp-content/uploads/2023/03/CodeLapa-Light.png);
    display: block;
    background-repeat: no-repeat;
    background-size: contain;
    width: 140px;
    height: 50px;
    text-align: center;
    margin-left: 10px;
    margin-bottom: 20px;
    margin-top: 30px;
}







div#wp-toolbar {
    background-color: white;
    border-radius: 7px;
    bottom: 7px;
    left: 26px;
}



ul#adminmenu li {
    margin: 8px 0px;
}
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    background: #2271b100;
  
}





div#adminmenuwrap::-webkit-scrollbar {
    width: 5px;
    background: none;
}
div#adminmenuwrap {
  
    transition: 1s;
}


div#adminmenuwrap::-webkit-scrollbar-thumb {
    background: #70718273;
    border-radius: 100px;
	visibility: hidden;
    transition: 1s;
}
div#adminmenuwrap:hover::-webkit-scrollbar-thumb {
   
	visibility:visible;
    transition: 1s;
}
div#adminmenuwrap::-webkit-scrollbar-thumb {
    background: #70718273;
    border-radius: 100px;
	
}
div#wpbody {
    min-height: 92vh;
}

#wpcontent {
 
    padding-left: 6px;
}

.wrap .notice{
display:none;
}




.plugin-update-tr.active td, .plugins .active th.check-column {
    border-left: 4px solid #040622;
}



.folded #adminmenu, .folded #adminmenu li.menu-top, .folded #adminmenuback, .folded #adminmenuwrap {
    width: 36px;
    padding: 0;
}
.folded #adminmenu:before{
display:none;
}

	

span.collapse-button-label {
    visibility: hidden;
    position: absolute !important;
}

.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover {
    background: #e31676;
    border-color: #e31676;
 
}

.wp-core-ui .button, .wp-core-ui .button-secondary {
    color: #ffffff;
    background: #3b76e1;
    
}


.theme-browser .theme .theme-screenshot {
   
    border-radius: 10px 10px 0px 0px;
}
</style>
    ';
}
add_action('wp_before_admin_bar_render', 'dashboard_logo');










// CRIANDO WIDGETS NO PAINEL INICIAL

function custom_dashboard_widget_host() {
  wp_add_dashboard_widget( 'custom_dashboard_widget_host', 'Suporte', 'custom_dashboard_widget_callback_host' );
}
add_action( 'wp_dashboard_setup', 'custom_dashboard_widget_host' );


function custom_dashboard_widget_callback_host() {
  echo '<div class="post-box">';
  echo '<a target="_blank" href="https://app.codelapa.com.br/" class="button">Acessar Suporte</a>';
  echo '</div>';
}


function move_custom_dashboard_widget_to_top() {
  global $wp_meta_boxes;
  $widget_id = 'custom_dashboard_widget_host';
  $widget = array( $widget_id => $wp_meta_boxes['dashboard']['normal']['core'][$widget_id] );
  unset( $wp_meta_boxes['dashboard']['normal']['core'][$widget_id] );
  $wp_meta_boxes['dashboard']['side']['core'] = $widget + $wp_meta_boxes['dashboard']['side']['core'];
}
add_action( 'wp_dashboard_setup', 'move_custom_dashboard_widget_to_top' );
