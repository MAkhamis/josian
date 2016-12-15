<?php

include WAW_PLUGIN_PATH . 'classes/site.php';
$waw_site = new Site;
$single_product = $waw_site->getSingleProduct($_REQUEST['id_products']);
$single_business = $waw_site->getBusinessFromID($_REQUEST['id_websites']);

$uploads = wp_upload_dir();

$WAW_CONTENT_WWW = $uploads['baseurl'].'/webagency/';


?>
<div class="single-product shop-quick-view-ajax clearfix">

                    <div class="ajax-modal-title">
                        <h2><?php echo $single_product->name;?></h2>
                    </div>

                    <div class="product modal-padding clearfix">

                        <div class="col_half nobottommargin">
                            <div class="product-image">
                                <div class="fslider" data-pagi="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
										<?php 
										$list_of_images = $waw_site->getProductsImagesLimit($single_product->id_products, 2);
										foreach($list_of_images as $p_image){ 
										;?>
                                            <div class="slide">
											<img src="<?php echo get_site_url();?>/wrimage/?width=440&height=586&cropratio=1:1.3&image=<?php echo $WAW_CONTENT_WWW;?>products_images/<?php echo $single_business->id_users;?>/<?php echo $p_image->image;?>" alt="<?php echo $p_image->name;?>" alt="<?php echo $p_image->name;?>"></div>
                                           <?php
										  }?> </div>
                                    </div>
                                </div>
								<?php if(!empty($single_product->promo_text)){ ?>
                                <div class="sale-flash"><?php echo $single_product->promo_text;?></div><?php } ?>
                            </div>
                        </div>
                        <div class="col_half nobottommargin col_last product-desc">
                            <div class="product-price"><?php if($single_product->old_price != "0.00"){?><del>$<?php echo $single_product->old_price;?></del><?php } ?> <ins>$<?php echo $single_product->new_price;?></ins></div>
                            
                            <div class="clear"></div>
                            <div class="line"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                          
						  <?php
						  /*
						  ?>
						
						     <form style="margin-bottom:0px;" action=
                                        "https://www.paypal.com/cgi-bin/webscr"
                                        id="p<?php echo $single_product->id_products;?>"
                                        method="post" name=
                                        "p{$single_product->id_products}">
                                            <fieldset style="margin-bottom:0px;"  >
                                                <input name="cmd" type="hidden"
                                                value="_cart"> <input name=
                                                "add" type="hidden" value="1">
                                                <input name="business" type=
                                                "hidden" value=
                                                "<?php echo $single_business->paypal;?>">
                                                <input name="item_name" type=
                                                "hidden" value=
                                                "<?php echo $single_product->name;?>">
                                                <input name="amount" type=
                                                "hidden" value=
                                                "<?php echo $single_product->new_price;?>">
                                                <input name="currency_code"
                                                type="hidden" value="USD">
                                                <input name="return" type=
                                                "hidden" value=
                                                "{$WAW_WEB_URL}?success=success">
                                                 <input name="cancel_return"
                                                type="hidden" value=
                                                "{$WAW_WEB_URL}?cancel">
                                                 
												 
												 
												 <a class="add-to-cart<?php echo $single_product->id_products;?>" fts=
                                                "p<?php echo $single_product->id_products;?>"
                                                href="#"><i class=
                                                "icon-shopping-cart"></i>
                                                <span>Add to Cart</span></a>
                                              
											  
											       <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                                            </fieldset>
                                        </form>
						  
					
						  
                                
           <form class="c" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="business" value="example@minicartjs.com">
                    <input type="hidden" name="item_name" value="Rainbow">
                    <input type="hidden" name="item_number" value="ROYGBIV">
                    <input type="hidden" name="amount" value="2.00">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="return" value="http://www.minicartjs.com/?success">
                    <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel">
                    <strong>Rainbow</strong>
                    <ul>
                        <li>#ROYGBIV</li>
                        <li>Price $2.00</li>
                    </ul>
                    <input type="submit" name="submit" value="Add ggto cart" class="button">
                </fieldset>
            </form>                
							
	
	
                            <div class="clear"></div>
                            <div class="line"></div>
                            	<?php */ ?>
							<?php echo $single_product->description;?>
							
							
                            <div class="panel panel-default product-meta nobottommargin">
                                <div class="panel-body">
                                    <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><?php echo $single_product->sku;?></span></span>
                                    <span class="posted_in">Category: <?php echo $single_product->category_name;?></span>
                                 </div>
                            </div>
                        </div>

                    </div>

                </div>
				<?php 
				
				?>
				
			
				
				