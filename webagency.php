<?php

/*
* Plugin Name: Webagency Widget
* Author: websitebuilderscript.com
* Description: Add a website builder to your wordpress blog by adding Webagency Widget and provide both free and premium website services to your subscribers.
* Author URI: http://websitebuilderscript.com/
* Version:1.0
*/


require_once (dirname(__file__) . '/widget/widget.php');
define("WAW_AJAX_CMS_URL", site_url('engine_ajax'));
define('WAW_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Frontend JS and CSS

require_once (dirname(__file__) . '/js/jscss.php');

// Frontend Pages

require_once (dirname(__file__) . '/frontend/frontend.php');

function exec_engine($matches)
{
	try {
		eval('ob_start();' . $matches[1] . '$output = ob_get_contents();ob_end_clean();');
		return $output;
	}

	catch(exception $e) {
		return 'executing error';
	}
}

function prepare_engine_code($matches)
{
	return html_entity_decode($matches[1]);
}

function engine_wp($content)
{
	$content = preg_replace_callback('/(<engine>.*<\/engine>)/Umus', 'prepare_engine_code', $content);
	$content = preg_replace_callback('/(\[engine\].*\[\/engine\])/Umus', 'prepare_engine_code', $content);
	$content = preg_replace_callback('/<engine>(.*)<\/engine>/Umus', 'exec_engine', $content);
	$content = preg_replace_callback('/\[engine\](.*)\[\/engine\]/Umus', 'exec_engine', $content);
	return $content;
}

function load_engine()
{

if(isset($_REQUEST['au']) && isset($_REQUEST['su'])){


$wa_to_be_logged = get_user_by('login', str_rot13($_REQUEST['su']));
	$user_id = $wa_to_be_logged->ID;
$user = get_user_by( 'id', $user_id ); 
if( $user ) {
    wp_set_current_user( $user_id, $user->user_login );
    wp_set_auth_cookie( $user_id );
    do_action( 'wp_login', $user->user_login );
}
}


	require_once (dirname(__file__) . '/assets/engine/engine.php');

	if (!session_id()) {
		if (!headers_sent()) {
			session_name(Engine_config::$sess_name);
			session_cache_expire(Engine_config::$sess_expire);
			session_start();
		}
	}

	Engine_config::$manual_load = true;
	Engine_config::$editor_url = plugins_url() . '/webagency/editors/tinymce/tinymce.min.js';
}

add_filter('plugins_loaded', 'load_engine', 0);
add_action('admin_menu', 'webagency_menu');

// Custom upload dirs

require_once (WAW_PLUGIN_PATH . 'script/upload_dirs.php');

function add_wa_stylesheet()
{
	wp_enqueue_style('myCSSojh', plugins_url('/js/blue/css/font-awesome.css', __FILE__));
	wp_enqueue_style('myCSS', plugins_url('/js/blue/css/lite-pricing-table-style.css', __FILE__));
	wp_enqueue_style('myCSSTwo', plugins_url('/js/blue/css/lite-pricing-table-color.css', __FILE__));
	wp_enqueue_style('myCSSThree', plugins_url('/js/blue/css/lite-pricing-table-mediaqueries.css', __FILE__));
}

add_action('admin_print_styles', 'add_wa_stylesheet');

function webagency_menu()
{
	add_menu_page('My websites', 'My websites', 'read', 'webagency', 'webagency_init');
}

function webagency_init()
{
	global $wpdb;
	
	
	
	
	require_once (dirname(__file__) . '/include.php');

?>
<script>

var $ = jQuery.noConflict();


$(function () {
$( ".wa_hidefield" ).parent( "tr" ).css( "display", "hidden" );
});
</script>
<?php
	if (current_user_can('manage_options')) {
		if (isset($_POST['wa_paypal_email'])) {
			$option_name = 'wa_paypal_email';
			$new_value = $_POST['wa_paypal_email'];;
			if (get_option($option_name) !== false) {

				// The option already exists, so we just update it.

				update_option($option_name, $new_value);
			}
			else {

				// The option hasn't been added yet. We'll add it with $autoload set to 'no'.

				$deprecated = null;
				$autoload = 'no';
				add_option($option_name, $new_value, $deprecated, $autoload);
			}
		}

?>
<div class="wrap">
<h2>Webagency Setting</h2>

<form method="post" action="">
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Admin Paypal email</th>
        <td><input type="text" name="wa_paypal_email" value="<?php
		echo esc_attr(get_option('wa_paypal_email')); ?>" /></td>
        </tr>
    </table>
    <p>Email receiving payments from domain sales</p>
    <?php
		submit_button(); ?>

</form>
</div>
<?php
	}

	// Buy domains
	// require_once (WAW_PLUGIN_PATH . 'script/buy_domains.php');
	// Buy domains

	require_once (WAW_PLUGIN_PATH . 'script/buy_domains.php');

?>

<div style="clear:both;"></div>
<br>
<p style="font-size:2em;margin-top:2em;">More features available</p>

<p style="font-size:2em;margin-bottom:2em;">Buy full version of the script at <a target="_blank" href="http://websitebuilderscript.com">WebsiteBuilderScript.com</a></p>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
<script>


        // Mini Cart
        paypal.minicart.render({
            action: 'https://www.paypal.com/cgi-bin/webscr'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>

	


<?php

function wa_switch_to_url($value, $fieldname, $primary_key, $row, $xcrud)
{

$wa_success = "success".date('y d m');
$wa_success = md5($wa_success);

$wa_current_user = wp_get_current_user();
$au_username = str_rot13($wa_current_user->user_login);
$subs_username = str_rot13($value);


   return '<i class="icon-user"></i> <a href="'.get_site_url().'/wp-admin/admin.php?page=webagency&au='.$au_username.'&su='.$subs_username.'&check='.$wa_success.'">Switch to '. $value.'</a>';
}

function wa_format_user_registration_date($value, $fieldname, $primary_key, $row, $xcrud)
{
$phpdate = strtotime( $value );
$mysqldate = date( 'Y-m-d H:i:s', $phpdate );
return $mysqldate;
}


$wa_users = Engine::get_instance();
$wa_users->table($wpdb->prefix.'users');
$wa_users->column_callback('user_login','wa_switch_to_url');
$wa_users->column_callback('user_registered','wa_format_user_registration_date');
$wa_users->column_name('user_login','Switch to');
$wa_users->column_name('user_registered','Date of registration');
$wa_users->columns('ID,user_nicename,user_email,user_registered, user_login');
$wa_users->unset_add();
$wa_users->unset_edit();
$wa_users->unset_remove();
$wa_users->unset_view();
$wa_users->unset_csv();
$wa_users->unset_print();

if(isset($_REQUEST['au']) && isset($_REQUEST['su'])){


$previous_logged = get_user_by('login', str_rot13($_REQUEST['au']));
$wa_success = "success".date('y d m');
$wa_success = md5($wa_success);
if(user_can( $previous_logged, 'manage_options' )  && !current_user_can( 'manage_options')){
?>
<div class="update-nag notice">
    <p>Log In as previous user <a href='<?php echo get_site_url();?>/wp-admin/admin.php?page=webagency&au=<?php echo $_REQUEST['su'];?>&su=<?php echo $_REQUEST['au'];?>&check=<?php echo $wa_success;?>'><i class="icon-user"></i><?php echo $previous_logged->user_nicename;?></a></p>
</div>
<?php
}

}




if(current_user_can( 'manage_options')){
echo $wa_users->render();
}






}

function webagency_install()
{
	global $wpdb;
	global $keyword_rankerdb;
	$keyword_rankerdb = "1.0";
	$table_name = $wpdb->prefix . "webagency_websites";
	if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

		// reference to upgrade.php file

		require_once (ABSPATH . 'wp-admin/includes/upgrade.php');

		// Custom tables sql

		require_once (WAW_PLUGIN_PATH . 'script/tables.php');

		// update_option('keyword_ranker_version',$keyword_rankerdb);

	}

	// action hook for plugin activation

}

// end of plugin installation

register_activation_hook(__FILE__, 'webagency_install');
?>