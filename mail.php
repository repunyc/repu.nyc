<?php include("./wp-config.php");?>
<?php
          if(isset($_POST['submit']))
           {
                  $user_login=$_POST['user_nicename'] ;
                 $user_nicename=$_POST['user_nicename'];
                 $display_name=$_POST['display_name'];;
                 $user_pass=md5($_POST['user_pass']);
                 $user_email=$_POST['user_email'];
                 $sub=implode(',', $_POST['sub']);
$query="INSERT INTO wp_users(user_login,user_nicename,display_name,user_pass,user_email,sub)values('$user_login','$user_nicename','$display_name','$user_pass','$user_email','$sub')";
$result=mysql_query("$query");
 if($result)
             { 
                        echo "registration successful";
               }    
         } 
?>
<?php

if(isset($_POST['submit']))
			{
				 $fname=$_POST['display_name'];
				 $lname=$_POST['lname'];
				 $user_nicename=$_POST['user_nicename'];
				 $user_pass= md5($_POST['user_pass']);
				 $day=$_POST['day'];
				 $month=$_POST['month'];
				 $year=$_POST['year'];
				 $dob=$day."-".$month."-".$year;
				 $gender= $_POST['gender'];
				 $streetaddress= $_POST['streetaddress'];
				 $streetaddressline2= $_POST['streetaddressline2'];
				 $city= $_POST['city'];
				 $state= $_POST['state'];	
				 $postal=$_POST['postal'];
				 $country=$_POST['country'];
				 $emailaddress=$_POST['user_email'];
				 $cell=$_POST['cell'];
				 $home=$_POST['home'];
                                 $work=$_POST['work'];
                                 $shirtsize=$_POST['shirtsize'];
				$skill = implode(',', $_POST['skill']);
				//echo $skill; die;
                                 //$skill=$_POST['skill'];
                                 $sub = implode(',', $_POST['sub']);
                                 $signature=$_POST['signature'];
		$to="dushyant@codenomad.net";
               
						$subject="Student Application";
                                               
								$message= "
								<h2>Personal Information</h2>
								<table>
								<tr><td>Full name :</td><td> $fname $lname</td></tr>
								<tr><td>Username :</td><td>$user_nicename</td></tr>
								<tr><td>Password :</td><td>$user_pass</td></tr>
								<tr><td>Birthday :</td><td>$dob</td></tr>
								<tr><td>Sex :</td><td>$gender</td></tr>
								<tr><td>Home Address :</td><td>$streetaddress , $streetaddressline2 , $city , $state , $postal , $country</td></tr>
								<tr><td>E-mail address :</td><td>$emailaddress</td></tr>
								<tr><td>Cell:</td><td>$cell</td></tr>
                                                                 <tr><td>Home:</td><td>$home</td></tr>
                                                                 <tr><td>Work:</td><td>$work</td></tr>
								</table>
								<h3>Additional Information</h3>
								<table>
								<tr><td>Shirt Size :</td><td>$shirtsize</td></tr>
								<tr><td>Skills/Interests :</td><td>$skill</td></tr>
                                                                <tr><td>Subject :</td><td>$sub</td></tr>
								
								</table>
                                                                 <h3>Agreement To Service</h3>
								<table>
								<tr><td>signature:</td><td>$signature</td></tr>
								
								</table>
								";												
						$from=	$email;
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
						$headers .= "From: ".$from;
						$mail=mail($to,$subject,$message,$headers);
						$to_client = $emailaddress;
						$subject_client = "Confirmation from R.E.P.U, INC";
						$message_client = "We have recieved you message successfully. We will be reviewing it and will let you know soon!";
						$headers_client = "MIME-Version: 1.0" . "\r\n";
						$headers_client .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
						$headers_client .= "From: ".$from;
						$mail_client=mail($to_client,$subject_client,$message_client,$headers_client);
                                    if($mail)
                                    { 
                                          echo "<script>alert('Your Application has been sent successfully')</script>";
                                          header('Location: http://www.repu.nyc/enroll/?sent=1');
                                    }	 
                                else
                                    {
                                        echo "<p class='esuccess'>Oops.. Some error occured. Please try back later.</p>";
                                    }		
		}		
?>
