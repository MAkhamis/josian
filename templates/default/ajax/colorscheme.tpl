<div class="shop-quick-view-ajax">
<div class="ajax-modal-title">
<h2>Color Scheme</h2>
</div>
<script>
$(function() {

	$( ".canvascolor" ).click(function(){


var url = "<?php echo get_site_url();?>/editcolorsheme";
var colors = $(this).find("span").toArray().reverse();



var wa_c = [];
  for ( var i = 0; i < colors.length; i++ ) {
    wa_c.push( colors[ i ].innerHTML );
  }
  
  wa_c.push($("#id_websites").val());

  
$.ajax({
           type: "POST",
           url: url,
           data: {wa_c:wa_c},
           success: function(data)
           {
            location.reload(); // show response from the php script.
           }
         });




	});
});
</script>

<div class="container clearfix" style="width:750px;height:250px;">

<div class="fancy-title title-center title-dotted-border">
<h3>Select color</h3>
</div>

<form id="editsectionform" action="" method="post" >
<?php


?>





<div id="oc-sections" class="owl-carousel image-carousel colorscheme">

		<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #337AB7;"><span class="tran">default</span></div>
		</div>
		</div>
		
		<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #E71818;"><span class="tran">red</span></div>
		</div>
		</div>
	
		<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #478936;"><span class="tran">green</span></div>
		</div>
		</div>
		
		<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #EA511E;"><span class="tran">orange</span></div>
		</div>
		</div>
		
	<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #660099"><span class="tran">purple</span></div>
		</div>
		</div>
	
	
	
	<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #CC33CC"><span class="tran">pink</span></div>
		</div>
		</div>
		
		
		<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #651414"><span class="tran">brown</span></div>
		</div>
		</div>
		
		
		<div class="oc-item">
		<div class="canvascolor">
        <div class="place tran c4" style="background-color: #666666"><span class="tran">grey</span></div>
		</div>
		</div>
		
	
	
	
		
		
		
		
		
</div>



<input id="id_websites" type="hidden" name="id_websites" value="<?php echo $_REQUEST['id_websites'];?>" />


</form>

<script type="text/javascript">

jQuery(document).ready(function($) {

	var ocImages = $("#oc-sections");

	ocImages.owlCarousel({
margin: 20,
nav: true,
navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
autoplay: false,
autoplayHoverPause: true,
dots: false,
navRewind: false,
responsive:{
0:{ items:2 },
600:{ items:3 },
1000:{ items:4 },
1200:{ items:4 }
		}
	});

});

</script>
</div>
</div>