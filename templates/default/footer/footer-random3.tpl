
{assign var="bgnum" value=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14) }
{capture}{$bgnum|@shuffle}{/capture}
	
<div class="d section parallax nomargin nopadding" style="background-size: cover;background-image: url('{$WAW_PLUGIN_WWW}/templates/default/images/bg/{$bgnum[0]}.png'); padding: 100px 0;background-position:fixed;" >


<!-- Footer
		============================================= -->
		<footer id="footer"class="d">

		
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_one_third">

						<div class="widget clearfix">

				
							{$business->quote}
							
							<div style="background: url('{$WAW_PLUGIN_WWW}/templates/default/images/world-map.png') no-repeat center center; background-size: 100%;">
								<address>
									<strong>Headquarters:</strong><br>
									{$business->address}
								</address>
								<abbr title="Phone Number"><strong>Phone:</strong></abbr> {$business->phone}<br>
							
								<abbr title="Email Address"><strong>Email:</strong></abbr> {$business->email}
							</div>

						</div>
						
						
						<div class="widget clearfix">

							{if !empty($business->facebook)}
							<a href="{$business->facebook}" target="_blank" class="social-icon si-small si-rounded si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							{/if}
							{if !empty($business->twitter)}
							<a href="https://twitter.com/{$business->twitter}"  target="_blank" class="social-icon si-small si-rounded si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							{/if}
						{if !empty($business->gplus)}
							<a href="{$business->gplus}" target="_blank" class="social-icon si-small si-rounded si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
							{/if}

							{if !empty($business->pinterest)}
							<a href="{$business->pinterest}" target="_blank" class="social-icon si-small si-rounded si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>
							{/if}

							{if !empty($business->vimeo)}
							<a href="{$business->vimeo}" target="_blank" class="social-icon si-small si-rounded si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>
							{/if}

							{if !empty($business->github)}
							<a href="{$business->github}" target="_blank" class="social-icon si-small si-rounded si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>
							{/if}

							{if !empty($business->yahoo)}
							<a href="{$business->yahoo}" target="_blank" class="social-icon si-small si-rounded si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>
							{/if}

							{if !empty($business->linkedin)}
							<a href="{$business->linkedin}" target="_blank" class="social-icon si-small si-rounded si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
							{/if}

						</div>
						
						
						

					</div>

					<div class="col_one_third">

					
							
							
							<div id="instagram" class="widget clearfix">

								
<div class="fb-page" 
  data-href="{$business->facebook_page_url}"
  data-width="380" 
  data-hide-cover="false"
  data-show-facepile="true" 
  data-show-posts="false"></div>

						</div>
							
							
							
							<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=789820214410414";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

							
							
							
							

					

						

					</div>

					<div class="col_one_third col_last">

						<div class="widget quick-contact-widget clearfix">

							<h4>Send Message</h4>

							<div id="quick-contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

							<form id="quick-contact-form" name="quick-contact-form" action="{$WAW_WWW}/wa_quick_contact_us" method="post" class="quick-contact-form nobottommargin">

								<div class="form-process"></div>

								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-user"></i></span>
									<input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
								</div>
								
								<input type="hidden" id="template-contactform-wa-id" name="template-contactform-wa-id" value="{$business->id_websites}" />
	
								
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
								</div>
								<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-danger nomargin" value="submit">Send Email</button>

							</form>

							<script type="text/javascript">

								$("#quick-contact-form").validate({
									submitHandler: function(form) {
										$(form).animate({ opacity: 0.4 });
										$(form).find('.form-process').fadeIn();
										$(form).ajaxSubmit({
											target: '#quick-contact-form-result',
											success: function() {
												$(form).animate({ opacity: 1 });
												$(form).find('.form-process').fadeOut();
												$(form).find('.form-control').val('');
												$('#quick-contact-form-result').attr('data-notify-msg', $('#quick-contact-form-result').html()).html('');
												SEMICOLON.widget.notifications($('#quick-contact-form-result'));
											}
										});
									}
								});

							</script>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; {$smarty.now|date_format:"%Y"}. Powered by <a href="http://websitebuilderscript.com">WebsiteBuilderScript.com</a>.
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<div class="copyrights-menu copyright-links nobottommargin">
								<a href="#" data-scrollto="#home" >Home</a>/<a href="#" data-scrollto="#section-about-us"   >About</a>/ <a href="#" data-scrollto="#section-portfolio"   >Projects</a>/<a href="#" data-scrollto="#section-testimonials" >Testimonials</a>/<a href="#" data-scrollto="#section-contact" >Contact</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->