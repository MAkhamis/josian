<?php

require_once (dirname(__file__) . '/classes/site.php');
require_once (dirname(__file__) . '/assets/smarty/libs/Smarty.class.php');

$waw_site = new Site;
$single_business = $waw_site->getBusinessFromPermalink($wp_query->query_vars['pagename']);

$permalink = $wp_query->query_vars['pagename'];

$smarty = new Smarty;

$smarty->debugging = false;
$smarty->caching = false;

$uploads = wp_upload_dir();

$smarty->assign("business", $single_business, true);
$smarty->assign("WAW_WWW", get_site_url(), true);
$smarty->assign("WAW_BLOGNAME", get_bloginfo( 'name' ), true);



$smarty->assign("WAW_PLUGIN_WWW", plugins_url().'/webagency/', true);
$smarty->assign("TEMPLATE_DIR", WAW_PLUGIN_PATH.'/templates/default/', true);

$smarty->assign("WAW_CONTENT_WWW", $uploads['baseurl'].'/webagency/', true);

if ( is_user_logged_in() ) {

	if($single_business->id_users == get_current_user_id() || current_user_can( 'manage_options')){
		$wa_the_user = 'is_the_user';
	}else{
		$wa_the_user = 'not_the_user';
	}
		
} else {
	$wa_the_user = 'not_the_user';
}$smarty->assign("WAW_WEB_URL", get_site_url().'/site/'.$wp_query->query_vars['pagename'], true);

if(empty($single_business->header)){
	$smarty->assign("header", 'header', true);
}else{
	$smarty->assign("header", $single_business->header, true);
}if(empty($single_business->slider)){
	$smarty->assign("slider", 'slider', true);
}else{
	$smarty->assign("slider", $single_business->slider, true);
}if(empty($single_business->cone)){
	$smarty->assign("cone", 'default', true);
}else{
	$smarty->assign("cone", $single_business->cone, true);
}$smarty->assign("wa_the_user", $wa_the_user, true);

$smarty->assign("REQUEST", $_REQUEST, true);



if(empty($single_business->page)){
	$smarty->assign("page", 'page', true);
}else{
	$smarty->assign("page", $single_business->page, true);
}

if(empty($single_business->footer)){
	$smarty->assign("footer", 'footer-random', true);
}else{
	$smarty->assign("footer", $single_business->footer, true);
}

if(empty($single_business->testimonials)){
	$smarty->assign("testimonials", 'testimonials-random', true);
}else{
	$smarty->assign("testimonials", $single_business->testimonials, true);
}

if(empty($single_business->portfolio)){
	$smarty->assign("portfolio", 'portfolio-4', true);
}else{
	$smarty->assign("portfolio", $single_business->portfolio, true);
}


if(empty($single_business->contact_us)){
	$smarty->assign("contact_us", 'contact-2', true);
}else{
	$smarty->assign("contact_us", $single_business->contact_us, true);
}

$smarty->assign("id_websites", $single_business->id_websites, true);
$smarty->assign("id_users", $single_business->id_users, true);
$waw_site = new Site();
$smarty->assign("waw_site", $waw_site, true);

$smarty->setTemplateDir(plugin_dir_path( __FILE__ ).'templates/');

$smarty->setCompileDir($uploads['basedir'].'/webagency/template_c/');

$smarty->display( 'default/indexpage/index.tpl');

?>