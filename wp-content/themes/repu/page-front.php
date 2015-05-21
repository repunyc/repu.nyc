<?php
/*
	template name: Front Page
*/
 get_header();?>
				<div class="clear"></div>

				<div class="container">
					<!--<h1 class="heading">What We Do</h1>-->
					<!--<div class="menu-2">

						<ul>

							<li><a href="#">Facilities </a></li>

							<li><a href="#">Volunteers</a></li>

							<li><a href="#">Programs</a></li>

							<li><a href="#">Parents & Students</a></li>

						</ul>

					</div>--><!--menu-2 -->
					<div class="clear"></div>
					<div class="video_outer">
 <iframe style="background-color:#fff" class="wistia_embed player" name="wistia_embed" src="https://www.youtube.com/embed/F5ysSJd4jE8?autoplay=1" allowtransparency="true" frameborder="0" scrolling="no" width="100%" height="670px"></iframe>
					</div><!--slider -->
                   
					<div class="clear"></div>

					<div class="box girlbg">

						

                        <div class="box-1h1">
                            <!--h1>
                       Courses offered at R.E.P. U, Inc. are to enhance & extend student learning & experiences beyond the academic courses offored in school.
                            </h1-->
                        </div>

					</div><!--box1 -->

					<div class="box2">

						<!--<img src="<?php bloginfo('template_directory');?>/img/map.jpg" alt="image" />-->
                         <div class="map_outer">
						<?php echo do_shortcode('[put_wpgm id=1]');?>
                        </div>
                        
						<div class="box2-1h1">
                        	<h1>
                            	Courses offered in your area
                            </h1>
                       	</div>

					</div><!--box2 -->

	
	<?php get_footer();?>
