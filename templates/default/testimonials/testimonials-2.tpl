<section id="section-testimonials" >

<div class="section topmargin-sm nobottommargin">

					<div class="container clearfix">

						<div class="heading-block center">
							<h3>Testimonials</h3>
							<span>Check out some of our Client Reviews</span>
						</div>

						<ul class="testimonials-grid grid-3 clearfix nobottommargin">
							
							{foreach from=$waw_site->getTestimonials($id_websites) item=itemtestimonial}
							<li>
								<div class="testimonial">
									<div class="testi-image">
										<a href="#"><img src="{$WAW_WWW}/wrimage/?width=100&height=100&cropratio=1:1&image={$WAW_CONTENT_WWW}testimonials/{$id_users}/{$itemtestimonial->image}" alt="{$itemtestimonial->name}"></a>
									</div>
									<div class="testi-content">
										<p>{$itemtestimonial->description|strip_tags}</p>
										<div class="testi-meta">
											{$itemtestimonial->name}
											<span>{$itemtestimonial->company_name}</span>
										</div>
									</div>
								</div>
							</li>
							{/foreach}
						</ul>

					</div>

				</div>
</div>