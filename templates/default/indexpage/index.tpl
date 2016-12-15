<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="{$business->name}" />
	
	
	
	<link rel="stylesheet" href="{$WAW_PLUGIN_WWW}templates/default/style.{$cone}.css" type="text/css" />
	
	{wp_head()}
	<script>
var $ = jQuery.noConflict();
	</script>
	
	
	
	<!-- Stylesheets
	============================================= -->
	
	{if !$business->hfont}
	
	{else}
	<style>
	h1,h2,h3,h4,h5,label{
	
	}
	
	h1:not(.wa_fonts),
h2:not(.wa_f),
h3:not(.wa_f),
h4:not(.wa_f),
h5:not(.wa_f),
h6:not(.wa_f) { 
font-family:{$business->hfont};
}

	</style>
	{/if}
<link href='https://fonts.googleapis.com/css?family=Kadwa|Denk+One|Kurale|Lekton|Mouse+Memoirs|Kanit|Short+Stack|Poppins|Della+Respira|Sura|Caveat|Headland+One|Nova+Round|Magra|Bad+Script|Geo|Rhodium+Libre|Alegreya+Sans+SC|Raleway|PT+Sans|Lora|Open+Sans+Condensed:300|Droid+Sans|Ubuntu|Roboto+Slab|Droid+Serif|Merriweather|Arimo|Fjalla+One|PT+Sans+Narrow|Noto+Sans|PT+Serif|Titillium+Web|Indie+Flower|Alegreya+Sans|Bitter|Open+Sans|Roboto|Lato|Slabo+27px|Oswald|Roboto+Condensed|Montserrat' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	

	

	<!-- Document Title
	============================================= -->
	<title>{$business->name}</title>

</head>

<body class="stretched side-panel-left">

{if $wa_the_user eq 'is_the_user'}
{include file="default/edit/edit.tpl"}
{/if}


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

		
				{include file="default/header/$header.tpl"}
		
		{include file="default/slider/$slider.tpl"}
		

		
		
	
	
		<!-- Content
		============================================= -->
		<section id="content" >

			<div class="content-wrap nobottompadding" >

				
				
				
				{include file="default/page/$page.tpl"}
				
				{include file="default/portfolio/$portfolio.tpl"}
				
				
				
				
				{include file="default/testimonials/$testimonials.tpl"}

			{include file="default/contact_us/$contact_us.tpl"}

			</div>

		</section><!-- #content end -->

	{include file="default/footer/$footer.tpl"}
	</div><!-- #wrapper end -->
	
{if $wa_the_user eq 'is_the_user'}
<div style="z-index:10000;" id="editwtemplate">
<a href="#" class="button button-xlarge button-rounded side-panel-trigger bottommargin">Edit template</a>
</div>
{/if}
	
	

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{$WAW_PLUGIN_WWW}templates/default/js/functions.js"></script>
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
	
	{if !empty($REQUEST['success'])} 
<script>
    paypal.minicart.reset();
</script>
{/if}
	
</body>
</html>