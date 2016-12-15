 <?php
include WAW_PLUGIN_PATH . 'classes/site.php';
$waw_site = new Site;
$single_project = $waw_site->getSingleProject($_REQUEST['id_projects']);
$single_business = $waw_site->getBusinessFromID($_REQUEST['id_websites']);



$uploads = wp_upload_dir();

$WAW_CONTENT_WWW = $uploads['baseurl'].'/webagency/';


?>

<div class="shop-quick-view-ajax">



<div class="container clearfix" style="width:750px;">

			

			

		







<div class="fancy-title title-bottom-border">
<h2>Project Info:</h2>
</div>




















<div class="col_full ">


<div class="col_half">

						<?php echo $single_project->project_description;?>
</div>




<div class="col_half col_last bottommargin-sm">

<!-- Portfolio Single - Meta
						============================================= -->
						<ul class="portfolio-meta bottommargin">
							<li><span><i class="icon-user"></i>For:</span> <?php echo $single_project->forwho;?></li>
							<li><span><i class="icon-calendar3"></i>Completed on:</span> <?php echo $single_project->date_completed;?></li>
							<li><span><i class="icon-link"></i>By:</span> <?php echo $single_project->bywho;?></li>
						</ul>
						<!-- Portfolio Single - Meta End -->

						<!-- Portfolio Single - Share
						============================================= -->
						<div class="si-share clearfix">
							<span>Share:</span>
							<div>
								<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_site_url().'/site/'.$wp_query->query_vars['pagename'];?>" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a target="_blank" href="https://twitter.com/home?status=<?php echo get_site_url().'/site/'.$wp_query->query_vars['pagename'];?>" class="social-icon si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a target="_blank" href="https://pinterest.com/pin/create/button/?url=&media=<?php echo get_site_url().'/site/'.$wp_query->query_vars['pagename'];?>&description=" class="social-icon si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
								<a target="_blank" href="https://plus.google.com/share?url=<?php echo get_site_url().'/site/'.$wp_query->query_vars['pagename'];?>" class="social-icon si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>
								<a target="_blank" href="mailto:" class="social-icon si-borderless si-email3">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
							</div>
						</div>
						<!-- Portfolio Single - Share End -->

</div>
<div class="divider"><i class="icon-circle"></i></div>
</div>





</div>
</div>