<section id="section-contact">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin">

						<!-- Google Map
						============================================= -->
						<section id="google-map" class="gmap bottommargin" style="height: 300px;"></section>

						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript" src="{$WAW_PLUGIN_WWW}templates/default/js/jquery.gmap.js"></script>
						{$latlong = $waw_site->getLangLong($business->map)}

						<script type="text/javascript">

							$('#google-map').gMap({

								latitude: {$latlong['0']},longitude: {$latlong['1']},
								maptype: 'ROADMAP',
								zoom: 14,
								markers: [
									{
										latitude: {$latlong['0']},longitude: {$latlong['1']},
										html: '<div style="width: 300px;"><strong>Address:</strong><br>{$business->address}<abbr title="Phone Number"><strong><br>Phone:</strong></abbr> {$business->phone}<br><abbr title="Fax"><strong>Fax:</strong></abbr> {$business->fax}<br><abbr title="Email Address"><strong>Email:</strong></abbr> {$business->email}</div>',
										icon: {
											image: "{$WAW_PLUGIN_WWW}templates/default/images/icons/map-icon-red.png",
											iconsize: [32, 39],
											iconanchor: [32,39]
										}
									}
								],
								doubleclickzoom: false,
								controls: {
									panControl: true,
									zoomControl: true,
									mapTypeControl: true,
									scaleControl: false,
									streetViewControl: false,
									overviewMapControl: false
								}

							});

						</script><!-- Google Map End -->

						<!-- Contact Form
						============================================= -->
						<h3>Send us an Email</h3>

						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="{$WAW_WWW}/wa_contact_us" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>
<input type="hidden" id="template-contactform-wa-id" name="template-contactform-wa-id" value="{$business->id_websites}" />
	
							<div class="col_one_third">
								<label for="template-contactform-email">Email <small>*</small></label>
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
							</div>

							<div class="col_one_third col_last">
								<label for="template-contactform-phone">Phone</label>
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-subject">Subject <small>*</small></label>
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
							</div>

							

							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
							</div>

						</form>

						<script type="text/javascript">

							$("#template-contactform").validate({
								submitHandler: function(form) {
									$('.form-process').fadeIn();
									$(form).ajaxSubmit({
										target: '#contact-form-result',
										success: function() {
											$('.form-process').fadeOut();
											$('#template-contactform').find('.sm-form-control').val('');
											$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
											SEMICOLON.widget.notifications($('#contact-form-result'));
										}
									});
								}
							});

						</script>

						<div class="line"></div>

						

					

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget_links clearfix">

								<h4>MENU</h4>
								<ul>
									<li><a href="#" data-href="#home"><div>Home</div></a></li>
									<li><a href="#" data-href="#section-about-us"><div>About us</div></a></li>
									<li><a href="#" data-href="#section-shop"><div>Products</div></a></li>
									<li><a href="#" data-href="#section-testimonials"><div>Testimonials</div></a></li>
									<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
								</ul>

							</div>

						

						
						
						<div class="widget noborder notoppadding">
						<address>
									<strong>Address:</strong><br>
									{$business->address}
								</address>
								<abbr title="Phone Number"><strong>Phone:</strong></abbr> {$business->phone}<br>
								<abbr title="Email Address"><strong>Email:</strong></abbr> {$business->email}
						
						</div>
						
						

						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->