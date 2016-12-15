<?php

if (!is_admin()) {
	function waw_theme_redirect()
	{
		global $wp_query;
		global $wp;
		global $wpdb;
		$plugindir = plugin_dir_path(__FILE__);
		if (isset($wp_query->query) && !empty($wp_query->query["pagename"])) {
			if ($wp_query->is_404) {
				$wp_query->is_404 = false;
			}

			header("HTTP/1.1 200 OK");

	

			if (substr($wp_query->query["pagename"], 0, 5) == 'site/') {
				$templatefilename = 'site.php';
				
				
				
				
				
				
				
						
	function waw_site_dbl_scripts() {
    global $wp_scripts, $wp_styles;

    $wp_styles = new WP_Styles(); // reset all styles
    $wp_scripts = new WP_Scripts(); // reset all scripts
	
    wp_register_script( 'tjquery', includes_url('js/jquery/jquery.js?ver=1.11.3') );
   wp_enqueue_script( 'tjquery' );

   wp_register_script( 'tmigrate', includes_url('js/jquery/jquery-migrate.min.js?ver=1.2.1') );
   wp_enqueue_script( 'tmigrate' );
   
   wp_register_script( 'tplugins', plugins_url( 'templates/default/js/plugins.js', dirname(__FILE__) ));
   wp_enqueue_script( 'tplugins' );
   
     wp_register_script( 'tnivo', plugins_url( 'templates/default/js/jquery.nivo.js', dirname(__FILE__) ));
   wp_enqueue_script( 'tnivo' );
 

   
 
	wp_register_style( 'tbootstrap', plugins_url( 'templates/default/css/bootstrap.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tbootstrap' );
   
   wp_register_style( 'tbootstrap', plugins_url( 'templates/default/css/bootstrap.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tbootstrap' );
   
   wp_register_style( 'tdark', plugins_url( 'templates/default/css/dark.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tdark' );
   
   wp_register_style( 'tfonticons', plugins_url( 'templates/default/css/font-icons.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tfonticons' );
   
   wp_register_style( 'tanimate', plugins_url( 'templates/default/css/animate.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tanimate' );
   
   wp_register_style( 'tmagnificpopup', plugins_url( 'templates/default/css/magnific-popup.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tmagnificpopup' );
   
   wp_register_style( 'tnivoslider', plugins_url( 'templates/default/css/nivo-slider.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tnivoslider' );
   
   wp_register_style( 'tresponsive', plugins_url( 'templates/default/css/responsive.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tresponsive' );
   
   
   wp_register_style( 'tresponsive', plugins_url( 'templates/default/css/responsive.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'tresponsive' );
   
   
   
  // wp_register_style( 'wizard-blog', plugins_url( 'js/purecss/css/layouts/blog.css', dirname(__FILE__) ), array(), '20120208', 'all' );
  // wp_enqueue_style( 'wizard-blog' );
	
}

add_action( 'wp_enqueue_scripts', 'waw_site_dbl_scripts', 100 );
				
				
				
				
				


$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
do_waw_theme_redirect($waw_return_template);
	
				
			}

			
			if (substr($wp_query->query["pagename"], 0, 11) == 'engine_ajax') {
				$templatefilename = 'assets/engine/engine_ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}
			
			
			
			if (substr($wp_query->query["pagename"], 0, 7) == 'wrimage') {
				$templatefilename = 'wrimage.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 10) == 'addwebsite') {
			
			
	function wizard_dbl_scripts() {
    global $wp_scripts, $wp_styles;

    $wp_styles = new WP_Styles(); // reset all styles
    $wp_scripts = new WP_Scripts(); // reset all scripts
	
   wp_register_script( 'wizard-jquery', includes_url('js/jquery/jquery.js?ver=1.11.3') );
   wp_enqueue_script( 'wizard-jquery' );

   wp_register_script( 'wizard-jquery-migrate', includes_url('js/jquery/jquery-migrate.min.js?ver=1.2.1') );
   wp_enqueue_script( 'wizard-jquery-migrate' );
   
   wp_register_script( 'wizard-jquery-validate', plugins_url( 'js/jqueryvalidate/dist/jquery.validate.js', dirname(__FILE__) ));
   wp_enqueue_script( 'wizard-jquery-validate' );
   
   wp_register_script( 'wizard-notify', plugins_url( 'js/notify.js', dirname(__FILE__) ));
   wp_enqueue_script( 'wizard-notify' );
   

  wp_register_style( 'wizard-pure-min', plugins_url( 'js/purecss/pure-min.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'wizard-pure-min' );

	wp_register_style( 'wizard-grids-responsive-min', plugins_url( 'js/purecss/grids-responsive-min.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'wizard-grids-responsive-min' );
   
   wp_register_style( 'wizard-blog', plugins_url( 'js/purecss/css/layouts/blog.css', dirname(__FILE__) ), array(), '20120208', 'all' );
   wp_enqueue_style( 'wizard-blog' );
	
}

add_action( 'wp_enqueue_scripts', 'wizard_dbl_scripts', 100 );
			
				$templatefilename = 'wizard/wizard.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			add_filter('status_header', 'status_header_found_function', 10, 2);

			if (substr($wp_query->query["pagename"], 0, 6) == 'waajax') {
				if ($_GET['type'] == "itemproduct") {
					$waw_return_template = WAW_PLUGIN_PATH . 'templates/default/ajax/shopitem.tpl';
				}

				if ($_GET['type'] == "singleproject") {
					$waw_return_template = WAW_PLUGIN_PATH . 'templates/default/ajax/singleproject.tpl';
				}

				if ($_GET['type'] == "editsection") {
					$waw_return_template = WAW_PLUGIN_PATH . 'templates/default/ajax/editsection.tpl';
				}

				if ($_GET['type'] == "fonts") {
					$waw_return_template = WAW_PLUGIN_PATH . 'templates/default/ajax/fonts.tpl';
				}

				if ($_GET['type'] == "colorscheme") {
					$waw_return_template = WAW_PLUGIN_PATH . 'templates/default/ajax/colorscheme.tpl';
				}

				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 14) == 'editcolorsheme') {
				$wa_data = array(
					'cone' => $_REQUEST['wa_c']['0']
				);
				$wa_where = array(
					'id_websites' => $_REQUEST['wa_c']['1']
				);
				if ($wpdb->update($wpdb->prefix . "webagency_websites", $wa_data, $wa_where)) {
					echo "done";
				}
				else {
					echo "not done";
				}

				$templatefilename = 'ajax/ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 8) == 'editfont') {
				$wa_data = array(
					'hfont' => $_REQUEST['wa_f']['0']
				);
				$wa_where = array(
					'id_websites' => $_REQUEST['wa_f']['1']
				);
				if ($wpdb->update($wpdb->prefix . "webagency_websites", $wa_data, $wa_where)) {
					echo "done";
				}
				else {
					echo "not done";
				}

				$templatefilename = 'ajax/ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 11) == 'editsection') {
				$wa_data = array(
					$_REQUEST['section'] => $_REQUEST['filename']
				);
				$wa_where = array(
					'id_websites' => $_REQUEST['id_websites']
				);
				if ($wpdb->update($wpdb->prefix . "webagency_websites", $wa_data, $wa_where)) {
					echo "done";
				}
				else {
					echo "not done";
				}

				$templatefilename = 'ajax/ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 13) == 'wa_contact_us') {
				require_once (WAW_PLUGIN_PATH . 'classes/sendemail.php');

				$templatefilename = 'ajax/ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 19) == 'wa_quick_contact_us') {
				require_once (WAW_PLUGIN_PATH . 'classes/quickcontact.php');

				$templatefilename = 'ajax/ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}

			if (substr($wp_query->query["pagename"], 0, 13) == 'addnewwebsite') {
				$websiteusername = strtolower($_POST['username']);
				$website_permalink = sanitize_title($_POST['websitename']);
				if (username_exists($websiteusername)) {
					echo "Username In Use!";
				}
				else {
					$new_user_id = wp_create_user($websiteusername, $_POST['password'], $_POST['email']);
					echo "<h3>User successfully created</h3>";
					echo "<ul>";
					echo "<li><b>Username:</b> " . $websiteusername."</li>";
					echo "<li><b>Password:</b> " . $_POST['password']."</li>";
					echo "<li><b>Email:</b> " . $_POST['email']."</li>";
					echo "<li><b>Your website is now live:</b><br> <a style='color:white;' target='_blank' href='".get_site_url()."/site/" . $website_permalink."'>Click Here to view website</a></li>";
					echo "</ul>";
					echo "<p>You may now log in to your account to add content to your website</p>";
					
					$wdata = array(
						'permalink' => $website_permalink,
						'name' => $_POST['websitename'],
						'id_users' => $new_user_id,
						'domain' => $websiteusername
						
					);
					$wpdb->insert($wpdb->prefix . "webagency_websites", $wdata);
				
				}

				$templatefilename = 'ajax/ajax.php';
				$waw_return_template = WAW_PLUGIN_PATH . $templatefilename;
				do_waw_theme_redirect($waw_return_template);
			}
		}
		else {
		}
	}

	
	function do_waw_theme_redirect($url)
	{
		global $post, $wp_query;

		

		include ($url);

		die();

	

	}

	add_action("template_redirect", 'waw_theme_redirect');
}

?>