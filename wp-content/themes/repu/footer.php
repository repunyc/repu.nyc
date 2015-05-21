  <div id="fix-div">
  
					<div class="clear"></div>
				
					<div class="social">

						<h2>Follow Us</h2>

						<ul>

							<li><a href="https://twitter.com/REPUInc"><img src="<?php bloginfo('template_directory');?>/img/twitter.png" alt="twitter"/></a></li>

							<li><a href="https://www.facebook.com/REPUinc"><img src="<?php bloginfo('template_directory');?>/img/fb.png" alt="facebook"/></a></li>

							<li><a href="https://instagram.com/repu.nyc"><img src="<?php bloginfo('template_directory');?>/img/insta.png" alt="instagram"/></a></li>

							<li><a href="https://www.youtube.com/channel/UCNKFRwKQ6-AamFQZGGfFcNA"><img src="<?php bloginfo('template_directory');?>/img/youtube.png" alt="youtube"/></a></li>

						</ul>

					</div><!--social -->

					<div class="clear"></div>

					<div class="menu-box">
                    	<div class="blue-bg">

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
                        <div class="clear"></div>
                        </div>
					</div><!--menu box -->
				</div><!--container -->
                <div class="bg-yellow cro">
                	<div class="inner">
                	<span class="cr">(c)2014 R.E.P.U, Inc.</span>
                    </div>
                </div>
			</div><!--inner -->
		</div><!--wrapper inner -->
	</div><!--wrapper outer -->
    
        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script type="text/javascript">

    var jq152 = $.noConflict(true);

</script>
<script>
   
    
	jq152(document).ready(function(e) {
          
		jq152('.responsive-menu i').click(function(){
			jq152('nav.nav').toggle('slow');	
		});
                
                jq152(window).scroll(function() {
           jq152(".top-banner > .heading").css({
            'opacity' : 1-((jq152(this).scrollTop())/650)
            });          
        });
        
         jq152("div.container > p").css({
            'font-family': "'Ubuntu','Trebuchet MS',Trebuchet,Verdana,Helvetica,Arial,sans-serif"
            });   

            
	});
	jq152( window ).resize(function(e) {
		var wid = jq152( window ).width();
		if(parseInt(wid) > 640){
				jq152('nav.nav').show();
		}
	});
        
  
</script>


<?php wp_footer();?>

</body>

</html>
