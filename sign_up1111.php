<html>
	<head>
		<title>Sign Up</title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>/sign_up.php" id="sign-up" method="post" name="frm1" style="display: block;"> 
			<!-- SiGN UP USER FORM -->
			<div class="contact_form" id="Firstname">
				<label class="contact_label">First name*:</label>
				<input name="first_name" type="text" class="contact_ipbox" value="">
			</div>
			<div class="contact_form" id="Lastname">
				<label class="contact_label">Last name*:</label>
				<input name="last_name" type="text" class="contact_ipbox" value="">
			</div>
			<div class="contact_form">
				<label class="contact_label">Email address*:</label>
				<input name="email_address" id="email1" type="email" class="contact_ipbox email1" value="">
			</div>
			<div class="contact_form">
				<label class="contact_label">Password*:<br>
				<span class="text8">[At least 6 characters ]</span></label>
				<input name="password" type="password" class="contact_ipbox">
			</div>
			<div class="contact_form">
				<label class="contact_label">Confirm Password*:</label>
				<input name="com_password" type="password" class="contact_ipbox">
			</div>					
			<div class="contact_form">
				<input type="submit" name="submit" value="Submit" class="readmore_tab tab91" onclick="return validate_general()">       
			</div>                    
		</form>
		
	</body>
</html>