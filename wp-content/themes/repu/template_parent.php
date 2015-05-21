<?php
/*

Template Name:parent
*/
get_header();
?>
<script type="text/javascript" src="<?php //bloginfo('template_directory');?>/jquery/jquery-ui.js"></script>
<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#accordion" ).accordion();
});
</script>
<div class="wrapper-outer">
    <div class="wrapper-inner" style="background-color:#fff;>
		 <div class="inner">
			<div class="form_area">
            	<!--<img class="logo_form" src="<?php bloginfo('template_directory');?>/img/rep_u_header.png" />-->

                <h2 class="form_header">
                  PARENT APPLICATION
                </h2>
                <!--<?php  echo do_shortcode('[contact-form-7 id="307" title="student"]');?>-->
  <form action="<?php bloginfo('url');?>/parent_mail.php" method="post">
              <section>
                <div id="accordion">
                
                    <h3 class="head">
                      Personal Information
                    </h3>
                    <div class="section_detail" style="height:auto !important">
                       <div class="single_row">
                            <div class="left_area">
                                <span class="label">Full name</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                 <input type="text" name="display_name" class="fld"/>
                                    <span>First name</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="lname" class="fld"/>
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                          
                        
                         <div class="single_row">
                            <div class="left_area">
                                <span class="label">Username</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="user_nicename" class="fld"/>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Password</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="password" name="user_pass" class="fld"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Birthday</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer_2">
                                       <select name="day" class="fld">
                                       <option value="">Day</option>
                                        <?php 
		  for($i=1;$i<=31;$i++)
		  { ?>
		  <option value="<?php echo $i?>"><?php echo $i ?></option>
		 <?php   } ?>
                    </select>
                    <select name="month" id="month">
		 <option value="">Month</option>
		 <?php
		 $x=array("jan","feb","march","appr","may","jun","july","august","sep","oct","nov","dec");
		  foreach($x as $month)
		     { ?>
			    <option value="<?php echo $month ?>"><?php echo $month ?></option>
			<?php  }  ?> 
			</select>
                         <select name="year" id="year">
			<option value="">Year</option>
			<?php
			for($i=1947;$i<=2020;$i++)
			 { ?>
			   <option value="<?php echo $i ?>"><?php echo $i ?></option>
			 <?php } ?>
			 </select>
                                    <!--<input type="date" class="fld"/>-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Sex</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="radio" name="gender" value="Male" class="f_name"/> Male
                                </div>
                                <div class="fld_outer">
                                    <input type="radio" name="gender" value="Female" class="l_name"/> Female
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Home Address </span>
                            </div>
                            <div class="right_area" style="height:auto !important">
                                <div class="fld_outer">
                                    <input type="text" name="streetaddress" class="fld"/>
                                    <span>Street Address </span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="streetaddressline2" class="fld"/>
                                    <span>Street Address Line 2 </span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="city" class="fld"/>
                                    <span>City</span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="state" class="fld"/>
                                    <span> 	State / Province </span>
                                </div>
                                <div class="fld_outer">
                                    <input type="text" name="postal" class="fld"/>
                                    <span> Postal / Zip Code </span>
                                </div>
                                <div class="fld_outer">
                                   <select name="country" id="city" >
			 <option value="">---select---</option>
			 <?php
			 $x=array("India","Afghanistan","Australia","Bangladesh","Canada","China","Egypt");
			 foreach($x as $country)
			    { ?>
				<option value="<?php echo $country ?>"><?php echo $country ?></option>
			<?php	} ?>
			</select>
                                    <span>Country</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">E-mail address </span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer_f">
                                    <input type="email" name="user_email" class="fld"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                            <div class="boxed">
                               <span class="label">Cell</span>
                               <div class="sm_fld="fld"/>
                               <input type="text" name="cell" class="fld"/>
                                </div>
                            </div>
                            <div class="boxed">
                               <span class="label">Home</span>
                               <div class="sm_fld">
                                    <input type="text" name="home" class="fld"/>
                                </div>
                            </div>
                            <div class="boxed">
                               <span class="label">Work</span>
                               <div class="sm_fld">
                                    <input type="text" name="work" class="fld"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="head">
                        <span> Additional Information</span>
                    </h3>
                    <div class="section_detail">
                    
                    	<!--<div class="single_row">
                            <div class="left_area">
                                <span class="label">Resume</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="file" class="fld"/>
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Shirt Size</span>
                            </div>
                            <div class="right_area">
                                <div class="fld_outer">
                                    <input type="text" name="shirtsize" class="fld"/>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single_row">
                        	<div class="fw_ttl">
                        	<span>Skills/Interests </span>
                            </div>

                            
                           <div class="fw_area">
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Photography" /><label>Photography</label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Self- Defense" /><label>Self- Defense </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Fashion" /><label>Fashion </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Yoga" /><label>Yoga </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Fitness" /><label>Fitness</label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Culinary" /><label>Culinary </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Swimming" /><label>Swimming </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Art" /><label>Art </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Web Development" /><label>Web Development </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Poetry" /><label>Poetry </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Tutoring" /><label>Tutoring </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Embroidery" /><label>Embroidery </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Knitting" /><label>Knitting </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Wood Work" /><label>Wood Work </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Law" /><label>Law </label></div>
                            	<div class="selector_box"><input type="checkbox" name="skill[]" value="Mentoring" /><label>Mentoring </label></div>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                   
                    
                    
                    <h3 class="head">
                        Agreement To Service
                    </h3>
                    <div class="section_detail" style="height:auto !important">
                        <div class="single_row">
                        <div class="content_box">
                        <p>
                        I hereby authorize R.E.P. U, Inc. and/ or its agents to make an investigation of my background, references, characters, past employment, education, and criminal history record information. This may include any state or local files, including those maintained by both public and private organizations, and all public records. I give my permission for R.EP. U to access these files for the purpose of confirming the information contained on my application and/ or obtaining other information, which may be essential to my qualifications for employment. I hereby consent to R.E.P. U, Inc. verifying all the information I have provided on my application form.
                        </p>
                        </div>
                        </div>
                        <div class="single_row">
                            <div class="left_area">
                                <span class="label">Signature</span>
                            </div>
                            <div class="right_area">
                                <div class="sign_box">
                                    <textarea name="signature"></textarea>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="single_row">
								<input type="submit" value="Submit" name="submit" class="sub_fbt"/>	 
                        </div>
                    </div>
                    
                    
                </div>
				</section>  
                      </form>
               
               
           
        </div>
    </div>
</div>
<?php 
if(isset($_GET['sent']) && $_GET['sent'] == 1){
     echo "<script>alert('Your Application has been sent successfully,Please check your mail.')</script>";
}

 ?> 
<?php

get_footer();
?>
                                 
