<section id="section-contact">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Contact Form
					============================================= -->
					<div class="col_half">

						<div class="fancy-title title-dotted-border">
							<h3>Send us an Email</h3>
						</div>

						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="{$WAW_WWW}/wa_contact_us" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Name <small>*</small></label>
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
							</div>

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
	<input type="hidden" id="template-contactform-wa-id" name="template-contactform-wa-id" value="{$business->id_websites}" />
						
						
							<div class="clear"></div>

							<div class="col_full">
								<label for="template-contactform-message">Message <small>*</small></label>
								<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
							</div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

							<div class="col_full">
								<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
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

					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= -->
					<div class="col_half col_last">

						<section id="google-map" class="gmap" style="height: 410px;"></section>

						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript" src="{$WAW_PLUGIN_WWW}templates/default/js/jquery.gmap.js"></script>
				
						
						{$latlong = $waw_site->getLangLong($business->map)}

						<script type="text/javascript">

							jQuery('#google-map').gMap({

								latitude: {$latlong['0']},
								longitude: {$latlong['1']},
								maptype: 'ROADMAP',
								zoom: 14,
								markers: [
									{
										latitude: {$latlong['0']},
										longitude: {$latlong['1']},
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

						</script>

					</div><!-- Google Map End -->

					<div class="clear"></div>

					<!-- Contact Info
					============================================= -->
					<div class="row clear-bottommargin">

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<i class="icon-map-marker2"></i>
								</div>
								<h3>Our Headquarters<span class="subtitle">{$business->address}</span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<i class="icon-phone3"></i>
								</div>
								<h3>Speak to Us<span class="subtitle">{$business->phone}</span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<i class="icon-skype2"></i>
								</div>
								<h3>Make a Video Call<span class="subtitle">{$business->skype}</span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a target="_blank" href="https://twitter.com/{$business->twitter}"><i class="icon-twitter2"></i></a>
								</div>
								<h3>Follow on Twitter<span class="subtitle">{$business->twitter}</span></h3>
							</div>
						</div>

					</div><!-- Contact Info End -->

				</div>

			</div>

		</section><!-- #content end -->

		