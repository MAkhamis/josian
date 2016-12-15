<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
					
					{if !empty($business->logo)} 
						<a href="#" class="standard-logo" data-dark-logo="{$WAW_CONTENT_WWW}logo/{$id_users}/{$business->logo}"><img src="{$WAW_CONTENT_WWW}logo/{$id_users}/{$business->logo}" alt="{$business->name}"></a>
						<a href="#" class="retina-logo" data-dark-logo="{$WAW_CONTENT_WWW}logo/{$id_users}/{$business->logo}"><img src="{$WAW_CONTENT_WWW}logo/{$id_users}/{$business->logo}" alt="{$business->name}"></a>
				{else}
    		<a href="#" class="standard-logo" data-dark-logo="{$WAW_PLUGIN_WWW}/templates/default/images/logo.png"><img src="{$WAW_PLUGIN_WWW}/templates/default/images/logo.png" alt="{$business->name}"></a>
			<a href="#" class="retina-logo" data-dark-logo="{$WAW_PLUGIN_WWW}/templates/default/images/logo.png"><img src="{$WAW_PLUGIN_WWW}/templates/default/images/logo.png" alt="{$business->name}"></a>
				
{/if}
				</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
							<li><a href="#" data-href="#home"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about-us"><div>About us</div></a>
							</li>
								<li><a href="#" data-href="#section-portfolio" ><div>Projects</div></a></li>
						
							<li><a href="#" data-href="#section-testimonials" ><div>Testimonials</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>
						
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i></a>
						</div><!-- #top-cart end -->
						
			<script>			
		$(function() {				
$( "#top-cart-trigger" ).click(function() {
 paypal.minicart.view.toggle();
});
});	
		</script>		
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<div class="clear"></div>