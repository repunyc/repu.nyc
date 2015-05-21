<?php
/*
Template name:testing
*/
get_header();
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Accordion - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
</head>
<body>
<div id="accordion">
<h3>Section 1</h3>
<div>
<p>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
</ul>
</div>
<h3>Section 4</h3>
<div>
<p>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
mauris vel est.
</p>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
inceptos himenaeos.
</p>
</div>
</div>

  <div id="fix-div">
  
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
    
        
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
        
  
</script>-->

<?php wp_footer();?>

</body>

</html>

