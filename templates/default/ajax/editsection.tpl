<div class="shop-quick-view-ajax">
<div class="ajax-modal-title">
<h2>Edit Section</h2>
</div>
<script>
$(function() {

	$( ".chosenitem" ).click(function(){

$("#filename").val($(this).attr('filename'));
var url = "<?php echo get_site_url();?>/editsection";

$.ajax({
           type: "POST",
           url: url,
           data: $("#editsectionform").serialize(), // serializes the form's elements.
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
<h3>Choose <?php echo $_REQUEST['section'];?></h3>
</div>

<form id="editsectionform" action="" method="post" >
<?php


?>





<div id="oc-sections" class="owl-carousel image-carousel">

<?php




$dir    = WAW_PLUGIN_PATH.'/templates/default/'.$_REQUEST['section'];
$files1 = scandir($dir);

$supported_files = array(
    'tpl'
);

asort($files1);

foreach($files1 as $file){
	$thefile = str_replace(".html", "", $file);
	$thefile = str_replace(".tpl", "", $thefile);

	if($file == "." || $file == ".." ){}else{

	
	$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
if (in_array($ext, $supported_files)) {
?>

    	<div class="oc-item">
		
		<img class="chosenitem" filename="<?php echo $thefile;?>" src="<?php echo plugins_url().'/webagency/';?>templates/default/<?php echo $_REQUEST['section'];?>/<?php echo $thefile;?>.jpg" alt="Image 1">
		
		</div>

	<?php
	} else {}
	
		
	}}

?>
</div>


<input id="filename" type="hidden" name="filename" value="" />
<input id="section" type="hidden" name="section" value="<?php echo $_REQUEST['section'];?>" />
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