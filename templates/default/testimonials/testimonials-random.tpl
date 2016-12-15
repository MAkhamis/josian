
<section id="section-testimonials" >


{assign var="bgnum" value=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14) }
{capture}{$bgnum|@shuffle}{/capture}
	
<div class="d section parallax dark nobottommargin notopmargin" style="background-size: cover;background-image: url('{$WAW_PLUGIN_WWW}/templates/default/images/bg/{$bgnum[0]}.png'); padding: 100px 0;background-position:fixed;" >


				
				
					<div class="heading-block center" style="z-index:30;position: relative;">
						<h3>What Clients Say?</h3>
					</div>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								
								
								
								
								{foreach from=$waw_site->getTestimonials($id_websites) item=itemtestimonial}
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="{$WAW_WWW}/wrimage/?width=200&height=200&cropratio=1:1&image={$WAW_CONTENT_WWW}testimonials/{$id_users}/{$itemtestimonial->image}" alt="{$itemtestimonial->name}"></a>
									</div>
									<div class="testi-content">
										<p>{$itemtestimonial->description|strip_tags}</p>
										<div class="testi-meta">
											{$itemtestimonial->name}
											<span>{$itemtestimonial->company_name}</span>
										</div>
									</div>
								</div>
								{/foreach}
								
							
							</div>
						</div>
					</div>

					
					
					
					
					
				</div>	
				</div>