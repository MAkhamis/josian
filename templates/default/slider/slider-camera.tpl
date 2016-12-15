
<script type="text/javascript" src="{$WAW_PLUGIN_WWW}templates/default/js/jquery.camera.js"></script>
	<link rel="stylesheet" href="{$WAW_PLUGIN_WWW}templates/default/css/camera.css" type="text/css" />


<section id="slider" class="slider-parallax clearfix">

			<div class="camera_wrap" id="camera_wrap_1">
				{assign var="bannerlist" value=$waw_site->getBannersImages($id_websites)}
					{if !empty($bannerlist)} 
				{foreach from=$waw_site->getBannersImages($id_websites) item=banneritem}
				
				{if !empty($banneritem->image)}
				<div data-thumb="{$WAW_WWW}/wrimage/?width=120&height=120&cropratio=1.8:1&image={$WAW_CONTENT_WWW}templates/default/images/slider/full/thumbs/1.jpg"  data-src="{$WAW_CONTENT_WWW}banners/{$id_users}/{$banneritem->image}">
					<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
						<div class="container">{$banneritem->name}</div>
					</div>
				</div>
				{else}
				{assign var="bgnum" value=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14) }
				{capture}{$bgnum|@shuffle}{/capture}
				<div  data-thumb="{$WAW_WWW}/wrimage/?width=120&height=120&cropratio=1.8:1&image={$WAW_CONTENT_WWW}templates/default/images/slider/full/thumbs/1.jpg" data-src="{$WAW_PLUGIN_WWW}/templates/default/images/bg/{$bgnum[0]}.png">
					<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
						<div class="container">{$banneritem->name}</div>
					</div>
				</div>
				{/if}
				
				
				
				{/foreach}
				{else}
				{assign var="bgnum" value=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14) }
		{capture}{$bgnum|@shuffle}{/capture}
				<div data-thumb="{$WAW_WWW}/wrimage/?width=120&height=120&cropratio=1.8:1&image={$WAW_CONTENT_WWW}templates/default/images/slider/full/thumbs/1.jpg" data-src="{$WAW_PLUGIN_WWW}/templates/default/images/bg/{$bgnum[0]}.png">
					<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
						<div class="container">Sample banner 2</div>
					</div>
				</div>
				
				<div data-thumb="{$WAW_WWW}/wrimage/?width=120&height=120&cropratio=1.8:1&image={$WAW_CONTENT_WWW}templates/default/images/slider/full/thumbs/1.jpg" data-src="{$WAW_PLUGIN_WWW}/templates/default/images/bg/{$bgnum[0]}.png">
					<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
						<div class="container">Sample banner 2</div>
					</div>
				</div>
				<div data-thumb="{$WAW_WWW}/wrimage/?width=120&height=120&cropratio=1.8:1&image={$WAW_CONTENT_WWW}templates/default/images/slider/full/thumbs/1.jpg" data-src="{$WAW_PLUGIN_WWW}/templates/default/images/bg/{$bgnum[0]}.png">
					<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
						<div class="container">Sample banner 3</div>
					</div>
				</div>
				
				
				
				
				{/if}
				

			</div>


			<script type="text/javascript">

				jQuery(document).ready(function($) {
				
				
				 $('head').append("<script type='text/javascript' src='{$WAW_PLUGIN_WWW}templates/default/js/jquery.camera.js'><\/script>");
				
				 $('head').append("<link rel='stylesheet' href='{$WAW_PLUGIN_WWW}templates/default/css/camera.css' type='text/css' \/>");
				

					$('#camera_wrap_1').camera({
						thumbnails: true,
						height: '40%',
						loader: 'pie',
						loaderPadding: 1,
						loaderStroke: 5,
						onLoaded: function() {
							$('#camera_wrap_1').find('.camera_next').html('<i class="icon-angle-right"></i>');
							$('#camera_wrap_1').find('.camera_prev').html('<i class="icon-angle-left"></i>');
						}
					});

				});

			</script>

		</section>