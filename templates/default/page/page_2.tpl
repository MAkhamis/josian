<section id="section-about-us" >
<div class="container clearfix">
<div class="fancy-title title-dotted-border title-center">
<h1>About Us</h1></div>

<div class="tabs tabs-bordered clearfix" id="tab-2">

							<ul class="tab-nav clearfix">
								
								{foreach from=$waw_site->getListofPages($id_websites) item=itempage}
								<li><a href="#tabs-{$itempage->id_pages}">{$itempage->name}</a></li>
								{/foreach}
								
								
							</ul>

							<div class="tab-container">

								{foreach from=$waw_site->getListofPages($id_websites) item=itempage}
								<div class="tab-content clearfix" id="tabs-{$itempage->id_pages}">
									<h3>{$itempage->name}</h3>
							{$itempage->description}
								</div>
								{/foreach}
								
								
								

							</div>

						</div>

						<div class="line"></div>
						
						
						</div>
</section>