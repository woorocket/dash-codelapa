<?php
/**
 * Plugin Name: WooRocket
 * Plugin URI: https://woorocket.com.br
 * Description: Customize wordpress dashboard
 * Author: Gabriel Lapa
 * Author URI: https://woorocket.com.br
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
div#flatsome-notice {
display: none;
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
ul#wp-admin-bar-top-secondary {
    background-color: white;
}
#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
   
    background: #ffffff;
   
}


div#adminmenuwrap {
    overflow-y: auto;
    max-height: 95vh;
    overflow-x: hidden;
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



#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
    width: 230px;
   }
   
   #wpcontent, #wpfooter {
    margin-left: 230px;
}
input#publish {
    background-color: #009688 !important;
}
div#wpbody {
    background-color: #f1f3f7;
    padding: 30px 10px;
	 background-color: #f1f3f7;
	 border-radius: 45px 0px 0px 45px;
}

.postbox {
    border-radius: 15px;
    box-shadow: -1px 1px 8px #0000001c;
    border: none;
	  transition:0.6s;
	  padding: 10px;
}

#adminmenu a {
   
    color: #707182;
}
body {
  
    font-family: "Work Sans", sans-serif !important;
	letter-spacing: 0.8px;
   
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

ul#wp-admin-bar-root-default {
    display: none;
}

ul#adminmenu:before {
    content: "";
    background-image: url(https://woorocket.com.br/wp-content/uploads/2022/08/Woo-Rocket.png);
    display: block;
    background-repeat: no-repeat;
    background-size: contain;
    width: 90px;
    height: 50px;
    text-align: center;
    margin-left: 10px;
    margin-bottom: 20px;
    margin-top: 30px;
}

#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper {
    right: auto;
    left: 100%;
    bottom: 60%;
}
div#wpadminbar {
    background-color: #ff0000;
    max-width: fit-content;
}

div#wp-toolbar a.ab-item {
    color: #040622 !important;
}
div#wpadminbar {
    background-color: #ffffff00;
    min-width: fit-content;
}
div#wp-toolbar {
    background-color: white;
    border-radius: 7px;
    bottom: 7px;
    left: 26px;
}

div#wpadminbar {
    position: fixed;
    bottom: 0% !important;
    top: auto;
}
ul#adminmenu {
    padding-left: 20px;
}
ul#adminmenu li {
    margin: 8px 0px;
}
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    background: #2271b100;
  
}

#adminmenu .wp-submenu {
   
    left: 200px;
	border-radius:10px;
  
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

.woocommerce-layout__header {
    ;
    width: calc(100% - 230px);
    top: 32px;
	    top: 0;
    
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
</style>';
}







function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://woorocket.com.br/wp-content/uploads/2022/08/Woo-Rocket.png);
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
div#login {
    min-height: -webkit-fill-available;
    background-color: #061827d4;
    left: 0%;
    margin-left: 0;
    padding: 70px;
    width: 300px;
    box-shadow: 3px 0px 14px #00000033;
}
		
	#login p#nav a {
    color: white !important;
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
		
		
		body.login.js.login-action-login {
    background-image: url(https://woorocket.com.br/wp-content/uploads/2022/11/iStock-1281468896.svg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
}
		form#language-switcher {
    display: none;
}
		.mo-openid-app-icons {
    display: none;
}
		
		.privacy-policy-page-link {
    display: none;
}
		
		
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );




//changing the url on the logo to redirect them
function mb_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'https://woorocket.com.br/' );




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
div#wpadminbar {
    display: none;
}





button.logout {
    background-color: #f44336;
    color: white;
    border: none;
    border-radius: 5px;
    display: block;
    text-decoration: none !important;
    margin: 10px 0px;
    font-size: 70%;
    padding: 5px 20px;
}
section.conteudo-prime a {
    text-decoration: none;
}
section.conteudo-prime {
    padding: 30px;
    background-color: white;
    margin: 20px;
    border-radius: 10px;
    box-shadow: 0px 1px 5px #00000036;
    margin-left: 0px;
}
  div#setting-error-tgmpa {
    display: none;
}
.notice.notice-success.is-dismissible {
    display: none;
}
.primelista li:before {
    content: "\2022";
    font-size: 30px;
    display: inline-block;
    position: absolute;
    margin-left: -20px;
    color: #f3007a;
}

tr#user-1 {
    display: none;
}
        </style>
    ';
}
add_action('wp_before_admin_bar_render', 'dashboard_logo');






function my_admin_menu() {

add_menu_page(

__( 'WooRocket', 'my-textdomain' ),

__( 'Suporte WooRocket', 'my-textdomain' ),

'manage_options',

'sample-page',

'my_admin_page_contents',

'dashicons-schedule',

1

);

}



add_action( 'admin_menu', 'my_admin_menu' );



function my_admin_page_contents() {

?>

<section class="conteudo-prime">

<h1>

<?php esc_html_e( 'Suporte WooRocket', 'my-plugin-textdomain' ); ?>
	
	<p>
		
		<p>
			Clique no botão abaixo caso precise de suporte para o site.
	</p>
	
	<a target="_blank" href="https://app.woorocket.com.br/minha-conta/"><button class="btn-ajuda">
		Acessar suporte
	</button>
	</a>	
	
	<a target="_blank" href="/wp-login.php?action=logout"><button class="logout">
		Logout
	</button>
	</a>	
	<hr/>
		<h3>
			Dicas importantes:
	</h3>
		<ul class="primelista">
			<li>Lembre-se de deixar todos os plugins e temas atualizados.</li>
			<li>Todo o site foi construindo atráves do UxBuilder (Flatsome)</li>
			<li>Não insira mídias e arquivos com mais de 1MB</li>
			<li>Não instale muitos plugins</li>
			<li>Deixe apenas um tema instalado</li>
			
			
	</ul>
	

</h1>
	
	</section>

<?php

}







