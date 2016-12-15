<?php
//UPLOAD DIRS
add_filter('upload_dir', 'banners_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function banners_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/banners';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}



//UPLOAD DIRS
add_filter('upload_dir', 'pages_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function pages_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/pages';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}



//UPLOAD DIRS
add_filter('upload_dir', 'logo_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function logo_upload_dir( $upload ) {
  $upload['subdir'] = '/webagency/logo';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}




//UPLOAD DIRS
add_filter('upload_dir', 'blog_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function blog_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/blog';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}


//UPLOAD DIRS
add_filter('upload_dir', 'products_categories_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function products_categories_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/products_categories';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}







//UPLOAD DIRS
add_filter('upload_dir', 'testimonials_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function testimonials_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/testimonials';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}








//UPLOAD DIRS
add_filter('upload_dir', 'imagecache_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function imagecache_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/imagecache';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}




//UPLOAD DIRS
add_filter('upload_dir', 'template_c_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function template_c_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/template_c';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}





//UPLOAD DIRS
add_filter('upload_dir', 'products_images_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function products_images_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/products_images';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}




//UPLOAD DIRS
add_filter('upload_dir', 'projects_images_upload_dir');
$upload = wp_upload_dir();
// remove_filter('upload_dir', 'rrwd_upload_dir');
function projects_images_upload_dir( $upload ) {

    $upload['subdir'] = '/webagency/projects_images';
  $upload['path'] = $upload['basedir'] . $upload['subdir'];
  $upload['url']  = $upload['baseurl'] . $upload['subdir'];
  return $upload;
}


?>