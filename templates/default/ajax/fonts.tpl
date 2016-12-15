





<div class="shop-quick-view-ajax">
<div class="ajax-modal-title">
<h2>Change font</h2>
</div>
<script>
$(function() {

$( ".wa_fonts" ).click(function(){

var heading = $(this).find("input").val();

var wa_f = [];
wa_f.push(heading);
  
  wa_f.push($("#id_websites").val());

var url = "<?php echo get_site_url();?>/editfont";
$.ajax({
           type: "POST",
           url: url,
           data: {wa_f:wa_f},
           success: function(data)
           {
		   
		   $("h1,h2,h3,h4,h5,label").not(".wa_f").css({
	"font-family": heading
});
		   
            //location.reload(); // show response from the php script.
           }
         });










	});
});
</script>

<div class="container clearfix" style="width:750px;height:400px;">

<div class="fancy-title title-center title-dotted-border">
<h3>Choose font</h3>
</div>


<div id="oc-sections" class="owl-carousel image-carousel">


<?php 

$fonts = array(
'Open Sans, sans-serif',
'Roboto, sans-serif',
'Lato, sans-serif',
'Slabo 27px, serif',
'Oswald, sans-serif',
'Roboto Condensed, sans-serif',
'Kadwa, serif',
'Denk One, sans-serif',
'Kurale, serif',
'Lekton, sans-serif',
'Mouse Memoirs, sans-serif',
'Kanit, sans-serif',
'Short Stack, cursive',
'Poppins, sans-serif',
'Della Respira, serif',
'Sura, serif',
'Caveat, cursive',
'Headland One, serif',
'Nova Round, cursive',
'Magra, sans-serif',
'Bad Script, cursive',
'Geo, sans-serif',
'Rhodium Libre, serif',
'Alegreya Sans SC, sans-serif',
'Raleway, sans-serif',
'PT Sans, sans-serif',
'Lora, serif',
'Open Sans Condensed, sans-serif',
'Droid Sans, sans-serif',
'Ubuntu, sans-serif',
'Roboto Slab, serif',
'Droid Serif, serif',
'Merriweather, serif',
'Arimo, sans-serif',
'Fjalla One, sans-serif',
'PT Sans Narrow, sans-serif',
'Noto Sans, sans-serif',
'PT Serif, serif',
'Titillium Web, sans-serif',
'Indie Flower, cursive',
'Alegreya Sans, sans-serif',
'Bitter, serif'
);


$x = 1; 

while($x <= 41) {
?>
<div class="oc-item wa_fonts" >

<div class="wa_hp<?php echo $x;?>">
<h2 class="wa_f">This is Heading H2</h2>
<h3 class="wa_f" >This is Heading H3</h3>
<h4 class="wa_f" >This is Heading H4</h4>
<h5 class="wa_f" >This is Heading H5</h5>
<p class="wa_f" >This is the short sentence</p>
<input type="hidden" value="<?php echo $fonts[$x];?>" />
<script type="text/javascript">

jQuery(document).ready(function($) {


$('.wa_hp<?php echo $x;?> h1, .wa_hp<?php echo $x;?> h2, .wa_hp<?php echo $x;?> h3, .wa_hp<?php echo $x;?> h4, .wa_hp<?php echo $x;?> h5, .wa_hp<?php echo $x;?> label').css({
'font-family': '<?php echo $fonts[$x];?>'
});


});

</script>
</div>
</div>
<?php    
	$x++;
} 
?>


		
	
</div>


<input id="id_websites" type="hidden" name="id_websites" value="<?php echo $_REQUEST['id_websites'];?>" />


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
600:{ items:2 },
1000:{ items:2 },
1200:{ items:2 }
		}
	});

});

</script>
</div>
</div>