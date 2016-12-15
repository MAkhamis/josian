<?php

Class Site{

	function getBusinessFromPermalink($permalink) {
		global $wpdb;
		
		$single_business = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix ."webagency_websites where permalink='$permalink'" );
		
		//$single_business = $single_business->fetch();
$single_business = array_shift($single_business);
		return $single_business;
	}
	
	
	
	/**
 * trims text to a space then adds ellipses if desired
 * @param string $input text to trim
 * @param int $length in characters to trim to
 * @param bool $ellipses if ellipses (...) are to be added
 * @param bool $strip_html if html tags are to be stripped
 * @return string 
 */
function trim_text($input, $length, $ellipses = true, $strip_html = true) {
    //strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
  
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
  
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}

	
	
	
	
function getBusinessFromID($id_websites) {
		global $wpdb;
		
		$single_business = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix ."webagency_websites where id_websites='$id_websites'" );
		
		//$single_business = $single_business->fetch();
$single_business = array_shift($single_business);
		return $single_business;
	}	
	
	
	
	
	

	
//Blog
	function getBlogLimit($id, $count){
		global $wpdb;
		$bloglist = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_blog where id_websites='$id' order by date DESC limit $count");
		return $bloglist;
	}
	
	
	//Blog
	function getTestimonials($id){
		global $wpdb;
		$testimonials = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_testimonials where id_websites='$id'");
		return $testimonials;
	}
	
	//Blog
	function getTexture($texture = ""){
	
	$textures = array(
	array('45degreee_fabric','g'),
	array('60degree_gray','g'),
	array('always_grey','d'),
	array('argyle','d'),
	array('batthern','g'),
	array('beige_paper','g'),
	array('bgnoise_lg','g'),
	array('black_denim','d'),
	array('black_linen_v2','d'),
	array('black_paper','d'),
	array('black_scales','d'),
	array('black_thread','d'),
	array('black-Linen','d'),
	array('blackmamba','d'),
	array('bright_squares','g'),
	array('broken_noise','d'),
	array('brushed_alu','g'),
	array('brushed_alu_dark','g'),
	array('candyhole','g'),
	array('carbon_fibre','d'),
	array('carbon_fibre_big','d'),
	array('carbon_fibre_v2','d'),
	array('cardboard','g'),
	array('checkered_pattern','d'),
	array('circles','g'),
	array('classy_fabric','d'),
	array('concrete_wall','d'),
	array('concrete_wall_2','g'),
	array('concrete_wall_3','g'),
	array('connect','g'),
	array('cork_1','g'),
	array('crissXcross','d'),
	array('crossed_stripes','d'),
	array('crosses','g'),
	array('cubes','g'),
	array('dark_brick_wall','d'),
	array('dark_circles','d'),
	array('dark_matter','d'),
	array('dark_mosaic','d'),
	array('dark_stripes','d'),
	array('dark_wood','d'),
	array('darkdenim3','d'),
	array('darth_stripe','d'),
	array('denim','d'),
	array('diagmonds','d'),
	array('diagonal_striped_brick','d'),
	array('diagonal-noise','d'),
	array('diamonds','d'),
	array('double_lined','g'),
	array('dvsup','g'),
	array('elastoplast','g'),
	array('elegant_grid','g'),
	array('exclusive_paper','g'),
	array('fabric_1','g'),
	array('fabric_plaid','g')
	);
	
	shuffle($textures);
	

	
	
	if(!empty($texture)){
	
	return $texture;
	}else{	


	return $textures['0'];
}
	}
	
	
	function getBlogList($id, $count = '5', $start = '1'){
		global $wpdb;
		$bloglist = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_blog where id_websites='$id' order by date DESC limit $start, $count");
		$bloglist = $bloglist->fetchAll();

		return $bloglist;
	}
	
	
	function getBlog($id){
		global $wpdb;
		$blog = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_blog
where id_blog='$id'");
		$blog = $blog->fetch();
		return $blog;
	}
	
	
	
function TrimText($string, $limit = 100)
{
	$string = strip_tags($string);
	if(strlen($string) < $limit) {return $string;}
    $regex = "/(.{1,$limit})\b/";
    preg_match($regex, $string, $matches);
    return $matches[1];
}

	
	
	function getLangLong($map){
		$m = explode(",", $map);
		return $m;
	}


	//Portfolio
	
	
	
	//Blog
	function getProjectsCategories($id){
		global $wpdb;
		$projectscategories = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_projects_categories where id_websites='$id'");
		return $projectscategories;
	}
	
	
	
	
	function getProjects($id){
		global $wpdb;

		$projects = $wpdb->get_results("SELECT 
p.name as project_name
,p.id_projects as id_projects
,p.description as project_description
,p.bywho as bywho
,p.forwho as forwho
,p.date_completed as date_completed
,pc.name as category_name
FROM ".$wpdb->prefix ."webagency_projects_categories pc 
join ".$wpdb->prefix ."webagency_projects p on p.id_projects_categories = pc.id_projects_categories
where pc.id_websites='$id' order by p.date_completed desc");

		return $projects;
	}

	
	
	
	function getProjectsLimit($id, $limit){
		global $wpdb;

		$projects = $wpdb->get_results("SELECT 
p.name as project_name
,p.id_projects as id_projects
,p.description as project_description
,p.bywho as bywho
,p.forwho as forwho
,p.date_completed as date_completed
,pc.name as category_name
FROM ".$wpdb->prefix ."webagency_projects_categories pc 
join ".$wpdb->prefix ."webagency_projects p on p.id_projects_categories = pc.id_projects_categories
where pc.id_websites='$id' order by p.date_completed desc limit ".$limit);

		return $projects;
	}
	
	
	
	
	function getSingleProject($id){
		global $wpdb;

		
		
		$project = $wpdb->get_results("SELECT 
p.name as project_name
,p.id_projects as id_projects
,p.description as project_description
,p.bywho as bywho
,p.forwho as forwho
,p.date_completed as date_completed
,pc.name as category_name
FROM ".$wpdb->prefix ."webagency_projects_categories pc 
join ".$wpdb->prefix ."webagency_projects p on p.id_projects_categories = pc.id_projects_categories
where p.id_projects='$id'");
$project = array_shift($project);
		return $project;
	}

	
	
	


	function getProjectImages($id){
		global $wpdb;
		$project_images = $wpdb->get_results("SELECT *
FROM ".$wpdb->prefix ."webagency_images
where id_projects='$id' order by name asc");
	
		return $project_images;
	}
	
	
		function getProjectImageOne($id){
		global $wpdb;
		$project_image = $wpdb->get_results("SELECT *
FROM ".$wpdb->prefix ."webagency_images
where id_projects='$id' order by name asc limit 1");
	$project_image = array_shift($project_image);
		return $project_image;
	}
	
	
	
//Products


function getProductsCategories($id){
		global $wpdb;
		$productcategories = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_products_categories where id_websites='$id' order by name asc");
		//$productcategories = array_shift($productcategories);

		return $productcategories;
	}


	function getProducts($id){
		global $wpdb;

		$single_product = $wpdb->get_results("SELECT 
		p.name,
		p.description,
		p.id_products,
		p.old_price,
		p.new_price
		from ".$wpdb->prefix ."webagency_products p
		join ".$wpdb->prefix ."webagency_products_categories pc
		on pc.id_products_categories = p.id_products_categories
		where
		pc.id_websites='$id' order by p.id_products desc");
		$single_product = array_shift($single_product);
		return $single_product;
	}
	
	
	
	function getSingleProduct($id){
		global $wpdb;

		$single_product = $wpdb->get_results("SELECT 
		p.name,
		p.description,
		p.id_products,
		p.promo_text,
		pc.name as category_name,
		p.sku,
		p.old_price,
		p.new_price
		from ".$wpdb->prefix ."webagency_products p
		join ".$wpdb->prefix ."webagency_products_categories pc
		on pc.id_products_categories = p.id_products_categories
		where
		p.id_products='$id' order by p.id_products desc");
		$single_product = array_shift($single_product);
		return $single_product;
	}
	
	
	
	
	
	function getProductsbyCat($id, $id_cat){
		global $wpdb;

		$portfolio = $wpdb->get_results("SELECT 
		p.name,
		p.description,
		p.id_products,
		p.promo_text,
		p.old_price,
		p.new_price
		from ".$wpdb->prefix ."webagency_products p
		join ".$wpdb->prefix ."webagency_products_categories pc
		on pc.id_products_categories = p.id_products_categories
		where
		pc.id_websites='$id' and p.id_products_categories='$id_cat' order by p.id_products desc");
		//$portfolio = $portfolio->fetchAll();
		return $portfolio;
	}



	function getProductsImagesLimit($id,$limit = '2'){
		global $wpdb;
		$portfolio = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_products_images
where id_products='$id' order by name asc limit $limit");
		//$portfolio = $portfolio->fetchAll();
		return $portfolio;
	}
	
	
	function getProductsImages($id){
		global $wpdb;
		$product_images = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_products_images
where id_products='$id' order by name asc");
		//$portfolio = $portfolio->fetchAll();
		return $product_images;
	}
	
	
	
	
//Banners

	function getBannersImages($id){
		global $wpdb;
		$banners = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_banners where id_websites='$id'");
		//$portfolio = array_shift($portfolio);
		return $banners;
	}

	
	
		function getBannerRand($id){
		global $wpdb;
		$banner = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_banners where id_websites='$id' order by rand() limit 1");
		//$portfolio = array_shift($portfolio);
		$banner = array_shift($banner);
		
		return $banner;
	}
	
	
	
	

	function getPage($id){
		global $wpdb;
		$page = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_pages
where id_pages='$id'");
		$page = $page->fetch();
		return $page;
	}


	function Slug($text){
		// replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);

		// trim
		$text = trim($text, '-');

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// lowercase
		$text = strtolower($text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text))
		{
			return 'n-a';
		}

		return $text;
	}

	function getListofPages($id){
		global $wpdb;
		$page = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix ."webagency_pages
where id_websites='$id'");
		//$page = array_shift($page);
		return $page;
	}


	//Check if there is Image Gallery
	public static function check_image_gallery($id_business){
		global $wpdb;
		$count_album_business = $wpdb->get_results("SELECT count(*) as count FROM ".$wpdb->prefix ."webagency_album_business where id_business='$id_business'");
		$count_album_business = $count_album_business->fetch();
		$count = $count_album_business['count'];
		return $count;
	}	

	

	function getMeta($id_business,$container) {
		global $wpdb;
		$meta = array();
		$meta_sql = "SELECT * FROM ".$wpdb->prefix ."webagency_meta where id_business='$id_business' and container ='$container'";
		$meta_result = mysql_query($meta_sql);
		while($row = mysql_fetch_assoc($meta_result)){
			array_push($meta, $row);
		}
		return $meta;
	}



}









class Template
{
	protected $_file;
	protected $_data = array();

	public function __construct($file = null)
	{
		$this->_file = $file;
	}

	public function set($key, $value)
	{
		$this->_data[$key] = $value;
		return $this;
	}

	public function render()
	{
		extract($this->_data);
		ob_start();
		include($this->_file);
		return ob_get_clean();
	}
}
?>