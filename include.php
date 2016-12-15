<?php

echo Engine::load_css();
echo Engine::load_js();
$uploads = wp_upload_dir();

$current_user_id = get_current_user_id();


$engine = Engine::get_instance();
$engine->table($wpdb->prefix.'webagency_websites');

function wa_view_website($value, $fieldname, $primary_key, $row, $xcrud)
{

return '<i class="icon-user"></i> <a target="_blank" href="'.get_site_url().'/site/'.$value.'">View website</a>';
}

$engine->where('id_users =',$current_user_id);
$engine->change_type('id_users', 'int', $current_user_id);
$engine->column_callback('permalink','wa_view_website');
$engine->columns('logo,name,domain,email,permalink');
$engine->column_name('permalink','View website');

$engine->fields('name,description,domain,paypal,address,phone,permalink,email,map,logo,id_users', false, 'Info');
$engine->fields('bought,start_date,expiry_date,domain_comment', false, 'Domain');

$engine->change_type('logo', 'image', false, array(
'width' => 1200,
'path' => $uploads['basedir'].'/webagency/logo/'.$current_user_id));



    $engine->label('name','Website name');
    $engine->label('description','Business quote');
    $engine->label('domain','Domain name');
    $engine->label('permalink','Website permalink');
	$engine->label('email','Email address');
	$engine->label('phone','Phone number');
	$engine->label('map','Map location');
	$engine->label('address','Address');
$engine->label('twitter','Twitter username');
$engine->label('facebook','Facebook profile url');
$engine->label('gplus','Google+ profile url');
$engine->label('pinterest','Pinterest profile url');
$engine->label('vimeo','Vimeo profile url');
$engine->label('github','GitHub url');
$engine->label('yahoo','Yahoo profile url');
$engine->label('linkedin','Linkedin profile url');



$engine->validation_required('name',2)->validation_required('permalink',2)->validation_required('domain',2)->validation_required('domain');
$engine->validation_required('email');
$engine->fields('facebook,twitter,gplus,pinterest,vimeo,github,yahoo,linkedin,facebook_page_url, skype, instagram_id', false, 'Socials');
$engine->change_type('facebook,domain,twitter,instagram_id,facebook_page_urlgplus,facebook_page_url,paypal,skype,gplus,pinterest,vimeo,github,yahoo,linkedin', 'text');
$engine->no_editor('address');
$engine->no_editor('domain_comment');

$engine->change_type('map','point','39.909736,-6.679687',array('text'=>'Your address here'));
$engine->readonly('id_users');

if(current_user_can( 'manage_options')){}else{
$engine->disabled('bought,start_date,expiry_date,domain_comment');
}
$engine->default_tab('Website');

$banners = $engine->nested_table('Banners','id_websites',$wpdb->prefix.'webagency_banners','id_websites'); // 2nd level

$banners->modal('image');
$banners->columns('name,description,image');
$banners->fields('name,description,image');

$banners->label('name','Banner title');
$banners->label('description','Banner text');


$banners->validation_required('name',2)->validation_required('description',2);
//$banners->subselect('wid','{id_websites}');

$banners->change_type('image', 'image', false, array(
'width' => 1200,
'path' => $uploads['basedir'].'/webagency/banners/'.$current_user_id));

//Pages
$pages = $engine->nested_table('Pages','id_websites',$wpdb->prefix.'webagency_pages','id_websites');
$pages->columns('name,description,image');

$pages->fields('name,introline,description,image');
$pages->validation_required('name',2)->validation_required('description',2);

$pages->label('name','Page title');
$pages->label('introline','Introduction line');
$pages->label('description','Page content');


$pages->change_type('introline', 'text');
$pages->change_type('image', 'image', false, array(
'width' => 1200,

'path' => $uploads['basedir'].'/webagency/pages/'.$current_user_id));







//Pages
$testimonials = $engine->nested_table('Testimonials','id_websites',$wpdb->prefix.'webagency_testimonials','id_websites');
$testimonials->columns('name,description,image');

$testimonials->fields('name,company_name,description,image');


$testimonials->label('name','Person name');
$testimonials->label('introline','Introduction line');
$testimonials->label('description','Testimony');

$testimonials->label('company_name','Business name');

$testimonials->label('image','Photo/Logo');



$testimonials->validation_required('name',2)->validation_required('description',2);
$testimonials->change_type('name', 'text');
$testimonials->change_type('company_name', 'text');
$testimonials->change_type('image', 'image', false, array(
'width' => 1200,

'path' => $uploads['basedir'].'/webagency/testimonials/'.$current_user_id));









$projects_categories = $engine->nested_table('Projects Categories','id_websites',$wpdb->prefix.'webagency_projects_categories','id_websites'); // 2nd level
$projects_categories->columns('name,description');
$projects_categories->fields('name,description');                               
$projects_categories->default_tab('Projects Categories');

//Projects
$projects = $projects_categories->nested_table('Projects','id_projects_categories',$wpdb->prefix.'webagency_projects','id_projects_categories'); // 2nd level
$projects->columns('name,description,forwho');

$projects->change_type('forwho', 'text'); 
$projects->change_type('bywho', 'text'); 
$projects->fields('name,description,bywho,forwho,date_completed');


$images = $projects->nested_table('Images','id_projects',$wpdb->prefix.'webagency_images','id_projects'); // 2nd level
$images->columns('image,name,description');
$images->modal('image');
$images->validation_required('image',2);
$images->fields('name,description,image');


$images->change_type('image', 'image', false, array(
'width' => 1200,

'path' => $uploads['basedir'].'/webagency/projects_images/'.$current_user_id));

echo $engine->render();














?>
