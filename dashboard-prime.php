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
button.btn-ajuda {
    font-size: 16px;
    background-color: #689938d1;
    border: none;
    padding: 5px 10px;
    color: white;
}
  
  
// cor de fundo

#adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
    background-color: white !important;
}
.notice.notice-warning {
    display: none;
}

#adminmenuback {
    background-color: white !important;
}
#adminmenuwrap {
    background-color: white !important;
}

#wpbody-content div#dashboard-widgets-wrap {
    display: none;
}


#wpadminbar {
    
    color: #000000;
   
    background: white;
}
div#adminmenuwrap {
    box-shadow: 5px 1px 20px #0000000f;
}

.wp-core-ui .button-primary {
   
    background-size: 100% 200% !important;
    background-image: linear-gradient(to bottom, #faa61a 50%, #383838 50%) !important;
     transition:background-position 1s;
    border: none;
}



.wp-core-ui .button-primary {
   background-position:0 -100%;
}

  #adminmenu a {
   
    color: #000000;
}

div#awcfe_notice {
    display: none;
}

ul#adminmenu {
    background-color: white;
}
#adminmenu div.wp-menu-image:before {
   
    color: rgb(0 0 0 / 65%) !important;
}




#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    background: #faa61a;
    color: #fff;
}

#adminmenu .wp-submenu {
 
    background-color: white;
   
}




#adminmenu .wp-submenu a {
    color: #000000 !important;
   
    font-size: 12px;
    }
	
	.opensub {
    background-color: #faa61a !important;
   
}


#adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus {
    position: relative;
    background-color: #faa61a;
    color: #000000;
}

#wpadminbar .ab-empty-item, #wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon {
    color: #000000;
}


#wpadminbar {
   
   
    line-height: 3.46153846;
    height: 40px;
   
   
   
}



#wpadminbar #adminbarsearch:before, #wpadminbar .ab-icon:before, #wpadminbar .ab-item:before {

    color: rgb(250 166 26) !important;
}
#adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu {
    box-shadow: 0px 0px 20px #00000030;
    border-radius: 6px;
    left: 150px;
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
		
		
		body.login.js.login-action-login {
    background-image: url(https://mktprime.com/wp-content/uploads/2021/09/Componente-3-–-1.svg);
    background-repeat: repeat;
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

__( 'Marketing Prime', 'my-textdomain' ),

__( 'Marketing Prime', 'my-textdomain' ),

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

<?php esc_html_e( 'Painel Marketing Prime', 'my-plugin-textdomain' ); ?>
	
	<p>
		Olá, me chamo Gabriel Lapa, e fui o responsável pelo desenvolvimento do site. 
		<p>
			Clique no botão abaixo caso tenha ocorrido algum erro ou bug com wordpress.
	</p>
	
	<a href="https://api.whatsapp.com/send?phone=5511985158293&text=Ol%C3%A1%2C%20preciso%20de%20ajuda%20com%20um%20site"><button class="btn-ajuda">
		Entrar em contato
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





