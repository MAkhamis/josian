<!-- Content
		============================================= -->
		<section id="section-portfolio">

			<div class="content-wrap notoppadding">

				<div class="container clearfix">
<div class="fancy-title title-dotted-border title-center">
<h1>Projects</h1></div>
					<!-- Portfolio Filter
					============================================= -->
					<ul id="portfolio-filter" class="clearfix">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						{foreach from=$waw_site->getProjectsCategories($id_websites) item=projectcategories}
						<li><a href="#" data-filter=".pf-{$waw_site->Slug($projectcategories->name)}">{$projectcategories->name}</a></li>
						{/foreach}

					</ul><!-- #portfolio-filter end -->

					<div id="portfolio-shuffle">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio-3 clearfix">

						
{foreach from=$waw_site->getProjects($id_websites) item=project}
						<article class="portfolio-item pf-{$waw_site->Slug($project->category_name)}">
							<div class="portfolio-image">
								<div class="fslider" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											{foreach from=$waw_site->getProjectImages($project->id_projects) item=projectimage}
											<div class="slide"><a href="{$WAW_CONTENT_WWW}projects_images/{$id_users}/{$projectimage->image}"><img src="{$WAW_WWW}/wrimage/?width=600&height=450&cropratio=1.3:1&image={$WAW_CONTENT_WWW}projects_images/{$id_users}/{$projectimage->image}" alt="{$project->project_name}"></a></div>
											{/foreach}
										</div>
									</div>
								</div>
								<div class="portfolio-overlay" data-lightbox="gallery">
									{foreach from=$waw_site->getProjectImages($project->id_projects) item=projectimage  name=foo }
									{if $smarty.foreach.foo.first} 
									<a href="{$WAW_CONTENT_WWW}projects_images/{$id_users}/{$projectimage->image}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
									{else}
									<a href="{$WAW_CONTENT_WWW}projects_images/{$id_users}/{$projectimage->image}" class="hidden" data-lightbox="gallery-item"></a>
									{/if} 
									{/foreach}
									<a data-lightbox="ajax" href="{$WAW_WWW}/waajax/?id_projects={$project->id_projects}&type=singleproject&id_websites={$id_websites}" class="right-icon"><i class="icon-line-ellipsis"></i></i></a>

								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a data-lightbox="ajax" href="{$WAW_WWW}/waajax/?id_projects={$project->id_projects}&type=singleproject&id_websites={$id_websites}">{$project->project_name}</a></h3>
								<span>{$project->category_name}</span>
							</div>
						</article>
{/foreach}
					

					</div><!-- #portfolio end -->

					<!-- Portfolio Script
					============================================= -->
					<script type="text/javascript">

						jQuery(window).load(function(){

							var $container = $('#portfolio');

							$container.isotope({ transitionDuration: '0.65s' });

							$('#portfolio-filter a').click(function(){
								$('#portfolio-filter li').removeClass('activeFilter');
								$(this).parent('li').addClass('activeFilter');
								var selector = $(this).attr('data-filter');
								$container.isotope({ filter: selector });
								return false;
							});

							$('#portfolio-shuffle').click(function(){
								$container.isotope('updateSortData').isotope({
									sortBy: 'random'
								});
							});

							$(window).resize(function() {
								$container.isotope('layout');
							});

						});

					</script><!-- Portfolio Script End -->

				</div>

			</div>

		</section><!-- #content end -->
