
					<div class="clear"></div>
				
					<div class="social">

						<h2>Follow Us</h2>

						<ul>

							<li><a href="#"><img src="<?php bloginfo('template_directory');?>/img/twitter.png" alt="twitter"/></a></li>

							<li><a href="#"><img src="<?php bloginfo('template_directory');?>/img/fb.png" alt="facebook"/></a></li>

							<li><a href="#"><img src="<?php bloginfo('template_directory');?>/img/insta.png" alt="instagram"/></a></li>

							<li><a href="#"><img src="<?php bloginfo('template_directory');?>/img/youtube.png" alt="youtube"/></a></li>

						</ul>

					</div><!--social -->

					<div class="clear"></div>

					<div class="menu-box blue-bg">

						<!--<ul>

							<li><a href="#">-Resources</a></li>

							<li><a href="#">-Sponosors</a></li>

							<li><a href="#">-Meet The Volunteers</a></li>

							<li><a href="#">-Courses Offered</a></li>

							<li><a href="#">-Contact Us</a></li>

							<li><a href="#">-Privacy Policy</a></li>

						</ul>-->
						<?php wp_nav_menu( array( 'menu' => 'footer-menu' ) ); ?>
						<div class="footer-logo">
							<img src="<?php bloginfo('template_directory');?>/img/logo2.png" alt="footer Logo" />
						</div><!--footer logo -->
						<div class="newsletter">
							<?php dynamic_sidebar('news-letter');?>
						</div><!--newsletter -->
					</div><!--menu box -->
					<div class="clear"></div>
				<div class="footer-fixed">
					<div class="login-box">

						<img src="<?php bloginfo('template_directory');?>/img/contact-bg1.jpg" alt="contact bg" />

						<div class="login-form">

							<div class="form">

							<h1>Sign In</h1>

								<!--<label>E-mail</label>

								<input type="email" name="" />

								<label>Password</label>

								<input type="password" name="" />

									<span><a href="#">Forgot Your email password?</a></span>

								<input type="submit" value=""/>
-->
								<?php echo do_shortcode('[wppb-login]');?>
							</div>

						<?php //echo do_shortcode('[wppb-login]');?>
						</div>

					</div>
					</div>

				</div><!--container -->

			</div><!--inner -->

		</div><!--wrapper inner -->

	</div><!--wrapper outer -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	$(document).ready(function(e) {
		$('.responsive-menu i').click(function(){
			$('nav.nav').toggle('slow');	
		});
                
                $(window).scroll(function() {
            $(".top-banner > .heading").css({
            'opacity' : 1-(($(this).scrollTop())/650)
            });          
        });
        
         $("div.container > p").css({
            'font-family': "'Ubuntu','Trebuchet MS',Trebuchet,Verdana,Helvetica,Arial,sans-serif"
            });   
	});
	$( window ).resize(function(e) {
		var wid = $( window ).width();
		if(parseInt(wid) > 640){
				$('nav.nav').show();
		}
	});
</script>

<?php wp_footer();?>

</body>

</html>

