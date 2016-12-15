<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Webagency  Widget">
<title>Create your website</title>


<?php

wp_head();
   
?>

</head>
<body>
<?php
$bg = array('bg','bg2','bg3','bg4');
shuffle($bg);
?>

<video autoplay loop poster="<?php echo get_site_url();?>/wp-content/plugins/webagency/wizard/img/<?php echo $bg['0'];?>.jpg" id="bgvid">
    <source src="<?php echo get_site_url();?>/wp-content/plugins/webagency/wizard/img/<?php echo $bg['0'];?>.webm" type="video/webm">

</video>
<form id="webagencysignupform" class="pure-form pure-form-aligned">

<div class="pure-g" style="height:500px;">
    <div class="pure-u-1-2 webagencyform">
	<h2>Create your website</h2>
	
	<div id="webagencyrespond"></div>
    <fieldset id="thesubmitform">
        <div class="pure-control-group">
           
            <input id="name" name="websitename" required type="text" placeholder="Website name">
        </div>

        <div class="pure-control-group">
           
            <input id="password" name="password" required type="password" placeholder="Password">
        </div>

		<div class="pure-control-group">
           
            <input id="password_confirm" name="password_confirm" required type="password"  placeholder="Confirm Password">
        </div>
		
		
        <div class="pure-control-group">

            <input id="email" name="email" type="email" required placeholder="Email Address">
        </div>

    

        <div class="pure-control-group">


            <button type="submit" class="pure-button pure-button-primary">Submit</button>
			
			
			
        </div>
    </fieldset>

	
	<h2>Already a user?</h2>
	
	<a class="pure-button pure-button-primary" target="_blank" href="<?php echo wp_login_url(); ?>" title="Login" >Login Here</a>
	
	
	</div>
    <div class="pure-u-1-2 domainlist">
	
	
	
	

<script>
var $ = jQuery.noConflict();
$(function() {



$("#webagencysignupform").validate({
         ignore: ":hidden",
         rules: {
             password : {
			 minlength : 5
	},
    password_confirm : {
    minlength : 5,
    equalTo : "#password"
	}
         },
         submitHandler: function (form) {
             $.ajax({
                 type: "POST",
                 url: "addnewwebsite",
                 data: $(form).serialize(),
                 success: function (response) {
				 
				 
				 $('#thesubmitform').hide();
				$('#webagencyrespond').html(response);
				 
				 
                 }
             });
             return false; // required to block normal submit since you used ajax
         }
     });
















	
	
	


});
	
	$('#name').bind('keyup', function(e) {

		var code = (e.keyCode ? e.keyCode : e.which);
	 	//if(code == 13) { 
	 var websitename = $(this).val();
		 	var nbRow = $(this).val();
			$.get("http://naming.verisign-grs.com/ns-api/1.0/suggest?key="+websitename
				,{ 
					"key"			: websitename
				}, 
				function(data){

					constructTable(data.data);

					
				}
				,'json'
			);
			
		//return false;

 		//}
	});
	
	
		
	function constructTable(data){
		$(".sTable > tbody > tr").remove();
		var table = "";
		var title = "";
		var text = "";
		if(data['table'] !== null){
			$.each(data['table']['rows'], function(k,v){
			
				
				if(v.status != 'available'){
				table += '<tr class="notavailable" >';
				table += '<td></td>';
				table += '<td>'+v.name+'</td>';
				table += '</tr>';
				}else{
				table += '<tr class="available" >';
				
				table += '<td><input type="radio" class="wa_domain" name="username" value="'+v.name+'" ></td>';
				table += '<td>'+v.name+'</td>';
				table += '</tr>';
				}
				
			});
		}else{
			table += '<tr>';
				table += '<td>No result found</td>';
				table += '<td></td>';
			table += '</tr>';
		}
$(".sTable").show();
		$(".sTable > tbody").append(table);
	}
</script>

<h2>Choose a domain</h2>
		<div class="button-section" style="overflow-y:scroll;max-height:300px">
		
					<table class="sTable pure-table" style="display:none;margin: 0 auto;">
					<tr>
						<td></td><td></td>
						</tr>
							</table>
				</div>
	
	</div>
</div>

</form>

</body>
</html>