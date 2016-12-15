<?php

$wa_my_websites = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix ."webagency_websites where id_users='".get_current_user_id()."'" );

$wa_success = "success".date('y d m');
$wa_success = md5($wa_success);
if(!empty($_REQUEST['success'])  && $_REQUEST['success'] == $wa_success ){

?>
<div class="update-nag notice">
    <p>You payment has been received. You website will soon be online.</p>
</div>
<?php
}


foreach($wa_my_websites as $wa_website){
;?>


<div class="lite-pricing-table" >
<section id="lite-pricing-table">
    	<div class="container1">
		
		<h1><?php echo $wa_website->domain;?> <span>- <a target="_blank" href="<?php echo get_site_url()."/site/".$wa_website->permalink;?>"><i class="fa fa-eye"></i> View site</a></span></h1> 
		
            <!--BLOCK ROW START-->
            <div class="row">
            	<div style="width:33%;float:left;box-sizing:border-box;padding-right:20px;">
                    <!--PRICE CONTENT BLOCK START-->
                	<div class="price-content active clearfix">
                        
						
						
						 <!--PRICE LABEL START-->
                    	<div class="popular-label">
                        	<i class="fa fa-star"></i>
                        </div>
                        <!--//PRICE LABEL END-->
                        <!--PRICE CURRENCY START-->
                        <div class="price-details"></div> 
                        <div class="currency">
                            <span class="sign">$</span>
                            <span class="cost">0</span>
                            <span class="month">/ year</span>
                        </div>
                        <!--//PRICE CURRENCY END-->
                        <!--PRICE HEAD START-->
                        <div class="head">
                            <h3>Free</h3>
                        </div>
						
						
						
						
						
						
						
						
                        <!--//PRICE HEAD END-->
                        <!--PRICE FEATURES LIST START-->
                        <div class="plan-list">
                            <ul>
                                
								<li><a href="#"><strong><i class="fa fa-times times"></i><?php echo $wa_website->domain;?></strong></a></li>
								<li><a href="#"><strong><i class="fa fa-check check"></i>Unlimited</strong> Storage/Bandwidth</a></li>
                                <li><a href="#"><strong><i class="fa fa-check check"></i></strong> CMS</a></li>
                                <li><a href="#"><strong><i class="fa fa-check check"></i></strong> Shopping Cart</a></li>
								<li><a href="#"><strong><i class="fa fa-times times"></i></strong> Data Entry</a></li>

                           
                            </ul>	
                        </div>
                        <!--//PRICE FEATURES LIST END-->
                        <!--TEAM BUTTON START-->
                        <div class="price-btn">
                            <a class="btn"><i class="fa fa-check"></i>DONE</a>
                        </div>
                        <!--//TEAM BUTTON END-->
                    </div>
                    <!--//PRICE CONTENT BLOCK END-->
                </div>
                <div  style="width:33%;float:left;box-sizing:border-box;padding-right:20px;">
                    <!--PRICE CONTENT BLOCK START-->
                	<div class="price-content clearfix">
                        
						
						
						<!--PRICE CURRENCY START-->
                        <div class="price-details"></div> 
                        <div class="currency">
                            <span class="sign">$</span>
                            <span class="cost">50</span>
                            <span class="month">/ one year</span>
                        </div>
                        <!--//PRICE CURRENCY END-->
                        <!--PRICE HEAD START-->
                        <div class="head">
                            <h3>Basic</h3>
                        </div>
						
						
						
						
						
                        <!--//PRICE HEAD END-->
                        <!--PRICE FEATURES LIST START-->
                        <div class="plan-list">
                            <ul>
                              
								<li><a href="#"><strong><i class="fa fa-check check"></i><?php echo $wa_website->domain;?></strong></a></li>
								<li><a href="#"><strong><i class="fa fa-check check"></i>Unlimited</strong> Storage/Bandwidth</a></li>
                                <li><a href="#"><strong><i class="fa fa-check check"></i></strong> CMS</a></li>
                                <li><a href="#"><strong><i class="fa fa-check check"></i></strong> Shopping Cart</a></li>
								<li><a href="#"><strong><i class="fa fa-check check"></i></strong> Data Entry</a></li>

						   </ul>	
                        </div>
                        <!--//PRICE FEATURES LIST END-->
                        <!--TEAM BUTTON START-->
                        <div class="price-btn">
              
							
							
							
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="add" value="1" />
                    <input type="hidden" name="business" value="<?php echo esc_attr( get_option('wa_paypal_email') ); ?>" />
                    <input type="hidden" name="item_name" value="<?php echo $wa_website->domain;?> - Basic" />
                    <input type="hidden" name="amount" value="50.00" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="return" value="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=webagency&success=<?php echo $wa_success;?>&reset=true" />
                    <input type="hidden" name="cancel_return" value="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=webagency" />
                     <input type="submit" name="submit" value="Add to cart" class="button btn" />
                </fieldset>
				</form>
							
							
							
							
							
							
							

                        </div>
                        <!--//TEAM BUTTON END-->
                    </div>
                    <!--//PRICE CONTENT BLOCK END-->
                </div>
                <div style="width:33%;float:left;box-sizing:border-box;padding-right:20px;">
                    <!--PRICE CONTENT BLOCK START-->
                	<div class="price-content clearfix">
                        <!--PRICE CURRENCY START-->
                        <div class="price-details"></div> 
                        <div class="currency">
                            <span class="sign">$</span>
                            <span class="cost">150</span>
                            <span class="month">/ 3 years</span>
                        </div>
                        <!--//PRICE CURRENCY END-->
                        <!--PRICE HEAD START-->
                        <div class="head">
                            <h3>Premium</h3>
                        </div>
                        <!--//PRICE HEAD END-->
                        <!--PRICE FEATURES LIST START-->
                        <div class="plan-list">
                            <ul>
                              
							  <li><a href="#"><strong><i class="fa fa-check check"></i><?php echo $wa_website->domain;?></strong></a></li>
								<li><a href="#"><strong><i class="fa fa-check check"></i>Unlimited</strong> Storage/Bandwidth</a></li>
                                <li><a href="#"><strong><i class="fa fa-check check"></i></strong> CMS</a></li>
                                <li><a href="#"><strong><i class="fa fa-check check"></i></strong> Shopping Cart</a></li>
								<li><a href="#"><strong><i class="fa fa-check check"></i></strong> Data Entry</a></li>

							  
						  </ul>	
                        </div>
                        <!--//PRICE FEATURES LIST END-->
                        <!--TEAM BUTTON START-->
                        <div class="price-btn">
                        
						
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="add" value="1" />
                    <input type="hidden" name="business" value="<?php echo esc_attr( get_option('wa_paypal_email') ); ?>" />
                    <input type="hidden" name="item_name" value="<?php echo $wa_website->domain;?> - Premium" />
                    <input type="hidden" name="amount" value="150.00" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="return" value="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=webagency&success=<?php echo $wa_success;?>&reset=true" />
                    <input type="hidden" name="cancel_return" value="<?php echo get_site_url(); ?>/wp-admin/admin.php?page=webagency" />
                     <input type="submit" name="submit" value="Add to cart" class="button btn" />
                </fieldset>
				</form>
						
						
						
                        </div>
                        <!--//TEAM BUTTON END-->
                    </div>
                    <!--//PRICE CONTENT BLOCK END-->
                </div>
            </div>
            <!--//BLOCK ROW END-->
        </div>
    </section>
</div>


<?php
}

?>