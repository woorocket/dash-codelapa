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
button.btn-ajuda {
    font-size: 16px;
    background-color: #689938d1;
    border: none;
    padding: 5px 10px;
    color: white;
}
  
  
  </style>';
}



function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://www.agenciaouser.com.br/wp-content/uploads/2021/04/sitepreto-1.png);
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
    background-image: url(https://www.agenciaouser.com.br/wp-content/uploads/2021/04/sitepreto-1.png) !important;
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
	
	<a href="https://api.whatsapp.com/send?phone=5511985158293&text=Ol%C3%A1%2C%20preciso%20de%20ajuda%20com%20o%20site%20da%20Fernanda%20Ferraz"><button class="btn-ajuda">
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
			<li>Deixe apenas um tema instalado</li>
			<li>O site registra todas as alterações internas, <a target="_blank" href="/wp-admin/admin.php?page=wsal-auditlog">clique aqui para visualizar.</a></li>
			
	</ul>
	

</h1>
	
	</section>

<?php

}





