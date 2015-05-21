<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon"  type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon.ico">
<link href="<?php bloginfo('template_directory');?>/css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet" type="text/css" />

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
<script src='//artfully-production.s3.amazonaws.com/assets/artfully-v3.js' type='text/javascript'></script>
<link href='//artfully-production.s3.amazonaws.com/assets/themes/default.css' media='screen' rel='stylesheet' type='text/css'>
<script type='text/javascript'>
  jQuery(document).ready(function(){
    artfully.widgets.cart();
    
    artfully.widgets.donation().display(3017,[]);
    artfully.widgets.cart().display();
  });
</script>

<?php wp_head();?>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	$(document).ready	(function() 	{			
			$(".wppb-user-forms").fadeIn(2000);
			$("#wppb-login-wrap").css('display','block');	
			$("#user_login").val('');
			$("#user_pass").val('');
		
	});
</script>-->
<script language="javascript" src="<?php bloginfo('template_directory');?>/jquery/jquery-2.1.3.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

	
    $('.b_img').hover(function() {
        $('.b_img img').addClass('transition');
 
    }, function() {
        $('.b_img img').removeClass('transition');
    });
  });
</script>


</head>

<body>
	<div class="wrapper-outer">
		<div class="wrapper-inner">
                <div class="topbar">
                <div class="inner">
                
                <div class="lbo">
					<?php if(is_user_logged_in()){ 
                    $current_user = wp_get_current_user();
                    echo "<span><a href='#'>Welcome ".$current_user->display_name." </a></span>";
                    ?>
                    <span>
                    <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a>
                    </span>
					<?php 
                    }
					else{
					?>
                    <span>
                    <a href="<?php echo home_url(); ?>/login/" class="login_bt"></a>
                    </span>
                    <span class="signup">
                    
                    <a href="javascript:;" class="register_bt"></a>
			<ul class="signup_child">
			<li> <a href="<?php echo home_url(); ?>/volunteer/" class="child_bt">Volunteer</a></li>
			<li><a href="<?php echo home_url(); ?>/student/" class="child_bt">Student</a></li>
			<li><a href="<?php echo home_url(); ?>/parent/" class="child_bt">Parent</a></li>
			</ul>
                    
                    </span>
                    <?php } ?>
                 </div>
                    <?php if(is_user_logged_in() && is_page(134)){  
                        $current_user = wp_get_current_user();
                        //echo "<span>Welcome ".$current_user->display_name." </span>";
                    ?>
                    <style type="text/css">.heading {display:none;}</style>
                    <?php } ?>	
                    <span style="float:right; display:none;">			
                    <!--<a href="<?php //echo home_url(); ?>/sign_up.php">Sign Up</a>-->
                    </span><!--<ul>
                    <li><a href="<?php //echo home_url();?>/why-join-r-e-p-u-inc/">Why Join R.E.P. U, Inc?</a></li>
                    <li>| <a href="<?php //echo home_url();?>/why-volunteer/">  Why Volunteer?</a></li>
                    </ul>-->
                </div>
                </div><!--topbar -->	
				<div class="clear"></div>
				
                <header class="header">
                    <div class="inner">
                        <div class="logo">
                            <a href="#">
                                <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="logo" />
                            </a>
                        </div><!--logo -->
                    </div>
                 
					<div class="responsive-menu">
                    <i class="fa fa-bar">Menu</i>
                    </div>
                    
					<nav class="nav">
                        <div class="inner">
                            <div class="nav-left">
                            <?php wp_nav_menu( array( 'menu' => 'menu-left' ) ); ?>
                            </div><!--left nav -->						
                            <div class="empty20">&nbsp;</div>
                            
                            <div class="nav-right">
                            <?php wp_nav_menu( array( 'menu' => 'menu-right' ) ); ?>						
                            </div><!--right nav -->
                         </div>
					</nav><!--nav -->
                  
				</header>

                    
					<div class="top-banner topsec_bg">
						 <?php if(is_front_page()){ ?> 
						<div class="banner-wrap">
							<div class="banner-left">
								<div class="banner-left-inner b_img">
									<img class="img-zoom" src="<?php bloginfo('template_directory');?>/img/bimg_1.jpg" />
									<div class="txt_area">
										<span><a href="<?php echo home_url();?>/enroll/">Enroll</a></span>
									</div>
								</div>
							</div>
							<div class="banner-right">
								<div class="banner-right-inner">
								
									<div class="right-upper">
										<div class="right-upper-inner b_img">
											<img class="img-zoom" src="<?php bloginfo('template_directory');?>/img/bimg_2.jpg" />
											<div class="txt_area">
												<span><a href="<?php echo home_url(); ?>/volunteer/">Volunteer</a></span>
											</div>
										</div>
									</div>
									
									<div class="right-bottom">
									
										<div class="rb-left">
											<div class="rb-left-inner b_img">
												<img class="img-zoom" src="<?php bloginfo('template_directory');?>/img/bimg_3.jpg" />
												<div class="txt_area">
													<span><a href="sponosors">Sponsors</a></span>
												</div>
											</div>	

										</div>


										<div class="rb-right">
											<div class="b_img">
												<img class="img-zoom" src="<?php bloginfo('template_directory');?>/img/bimg_4.jpg" />
												<div class="txt_area">
													<span><a href="<?php echo home_url();?>/donate-2/">Donate</a></span>
												</div>
											</div>

										</div>
										
									</div>
								</div>
							</div>
						</div>
						<?php }
						else{
						?>
						<img src="<?php bloginfo('template_directory');?>/img/peace.jpg" alt="banber" /> 
						<h1 class="heading"><?php the_title();?></h1>
<?php }?>
 <?php if(is_user_logged_in() && is_page(134)){  

   

$pageTitle = Profile;
echo "<h1> ".$pageTitle." </h1>";

?>
<style type="text/css">
.top-banner h1{
   color: #2333ae;
    font-family: impact;
    font-size: 64px;
    font-weight: normal;
    margin: 0 40%;
    position: absolute;
    text-align: center;
    text-shadow: 0 0 6px #fde509;
    top: 40%;
  
}

</style>
<?php } ?>
						
					</div>	<!--top banner -->
					<div class="pop-up-frm" id="pop-up-frm" style="display:none;">
						<form action="#" method="post" name="sign-inn" id="sign_in" style="">
							<span class="sign-in"><h1>
</h1></span>
							<span class="sign-in"><h3>Email</h3></span>
							<span class="txt-typ sign-in"><input type="email" id="email_address" required name="email_address" value="" onchange="emailchkkk(this)" /> </span>	
							<span class="sign-in"><h3>Password</h3></span>
							<span class="txt-typ sign-in"><input type="password" id="password" required name="password" value="" /> </span>	
							<span class="fr-pss sign-in"><a style="float:right" href="javascript:;">Forget your Email or Password?</a></span>
							<span class="txt-typ sign-in"><input class="sign-in-submit" type="submit" name="sign-submit" value="" style="width:400px;margin-left:-10px;"/></span>						
						</form>	
					</div>
					<div class="blue-border"></div>
              
				</header><!--header -->
				
				<script>
					function emailchkkk(input) {
						//var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
						var address = document.sign-inn.email_address.value;
					    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
						if (document.sign-inn.email_address.value=='') 
						{ 
							input.setCustomValidity('Please fill out this field');
							document.sign-inn.email_address.focus();
							return false; 
						}
						else 
						{
							input.setCustomValidity('');
						}
						if(reg.test(address) == false) 
						{
								input.setCustomValidity('Invalid Email Address');								
						}
						else 
						{
							 input.setCustomValidity('');	
						}
					}
                                        
                                       $(window).scroll(function () {
                                        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

                                        if (scrollBottom <= $("menu-box").height()) {
                                            $(".menu-box").css("z-index", "0");
                                           
                                            } 
                                            else {
                                                
                                                $(".menu-box").css("z-index", "-1");
                                            }
                                    });
				</script>
				
				
				
				<?php // mt_profile_img(); ?>

