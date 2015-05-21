<?php/* 
Template Name: Sign Up User
*/ ?>
<?php get_header(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<?php 
if(@$_POST['submit']=='Submit')
{		
	global $wpdb;
	$insereted=$wpdb->insert('reg-users', array( 'membership_type' => $_POST['membership'], 'first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'] , 'email_addr' => $_POST['email_address'], 'password' => md5($_POST['password']) ) );
	echo $insereted;
	if($insereted == 1) {
	?>	
	<script>
		alert('You have successfully registered your account');
	</script>
	<?php	}
	else { ?>
		<script>
		alert('You could not registered. Please check your email address. It might be registered first.Try with some other email address.');
		</script>
	<?php }
}
?>
<script language='javascript' type='text/javascript'>
function check(input) {
		
    if (input.value != document.getElementById('password').value) {
		
        input.setCustomValidity('The two passwords must match.');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
	}
   
	
	/* if (input.value != document.getElementById('password').value) {
		
	} */
}
function chckk(input) {
	var str=input.value;	
	var len=0;
	len= str.length;
	if(len<6)
	{
		input.setCustomValidity('The password must have atleast 6 characters.');
	}
	else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
	}
}
		function chckkemail(input) {
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var address = document.frm1.email_address.value;
		   
			if (document.frm1.email_address.value=='') 
			{ 
				input.setCustomValidity('Please fill out this field');
				document.frm1.email_address.focus();
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
</script>
	
	<center>
		<div style="align:center;margin-right:17%;" class="sign-upp">
		<form action="<? echo bloginfo('siteurl') ?>/sign-up" align="center" id="sign-up" method="post" name="frm1" style="display: block;"> 
			<!-- SiGN UP USER FORM -->
			<div style="height:20px;"> </div>
			<div class="contact_form" id="membership-type">
				<label class="contact_label">Membership Type*:</label>	
				<!-- Stdent profile => 1 -->
				<span class="contact_ipbox">
					<div  style="float:left;" class="div-mem">
						<span class="spn-mem rd-label" style="margin-right:5%">Student Profile</span>
						<span class="spn-mem rb-span"><input name="membership" required type="radio" class="" value="1" style="float:left"></span>
					</div>
					<!-- Volunteer => 2 -->
					<div style="float:left" class="div-mem">
						<span class="spn-mem rd-label">Volunteer</span>
						<span class="spn-mem rb-span"><input name="membership" required type="radio" class="" value="2" style="float:left;margin-left:2%;padding:0px 2%"></span>	
					</div>
				</span>
			</div>
			<div class="contact_form wrapper-inner" id="Firstname">
				<label class="contact_label">First name*:</label>
				<input name="first_name" required type="text" class="contact_ipbox" value="">
			</div>
			<div class="contact_form wrapper-inner" id="Lastname">
				<label class="contact_label">Last name*:</label>
				<input name="last_name" required type="text" class="contact_ipbox" value="">
			</div>
			<div class="contact_form wrapper-inner">
				<label class="contact_label">Email address*:</label>
				<input name="email_address" required id="email1" type="email" onchange="chckkemail(this)" class="contact_ipbox email1" value="">
			</div>
			<div class="contact_form wrapper-inner">
				<label class="contact_label">Password*:<br>
				<span class="text8" style="font-size:10px;color:#000;">Hint:At least 6 characters </span></label>
				<input name="password" id="password" required type="password" class="contact_ipbox" onchange="chckk(this)">
			</div>
			<div class="contact_form wrapper-inner">
				<label class="contact_label">Confirm Password*:<br>
				<span class="text8" style="font-size:10px;color:#000;">Hint:Must same with password</span></label>
				<input name="com_password" required type="password" class="contact_ipbox" oninput="check(this)">
			</div>					
			<div class="contact_form wrapper-inner">
				<input type="submit" name="submit" value="Submit" class="readmore_tab submitt" onclick="return validate_general()">       
			</div>                    
		</form>
		</div>
	</center>
	<?php get_footer(); ?>