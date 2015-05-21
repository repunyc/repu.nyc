<?php
/*
Developed By: Dushyant Sharma
*/
?> 
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
				$filename = $_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$filename);

    $fileatt = "uploads/".$filename; // Path to the file
    $fileatt_type = "application/doc"; // File Type
    $fileatt_name = $filename; // Filename that will be used for the file as the attachment

    $email_from = $name; // Who the email is from
    $email_subject = "File Attachment"; // The Subject of the email
   // $email_message = "Attachment";


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
                                $sub=implode(',', $_POST['sub']);
				//echo $skill; die;
                                 //$skill=$_POST['skill'];
                                 $ref1_fname=$_POST['ref1_fname'];
                                $ref1_lname=$_POST['ref1_lname'];
                                 $ref1_phoneno=$_POST['ref1_phoneno'];
                                  $ref1_email=$_POST['ref1_email'];
                                   $ref2_fname=$_POST['ref2_fname'];
                                $ref2_lname=$_POST['ref2_lname'];
                                 $ref2_phoneno=$_POST['ref2_phoneno'];
                                  $ref2_email=$_POST['ref2_email'];
                                   $ref3_fname=$_POST['ref3_fname'];
                                $ref3_lname=$_POST['ref3_lname'];
                                 $ref3_phoneno=$_POST['ref3_phoneno'];
                                  $ref3_email=$_POST['ref3_email'];
                                 $sign=$_POST['sign'];
	

					$email_to="dushyant@codenomad.net";

$subject="Volunteer Application";
							
								$email_message= "
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
                                                                <h3>References</h3>
                                                              
                                                                 
								<table>
                                                                  <h4>Reference #1</h4>
								<tr><td>First name :</td><td>$ref1_fname</td></tr>
                                                                <tr><td>Last name:</td><td>$ref1_lname</td></tr>
								<tr><td>Phone Number :</td><td>$ref1_phoneno</td></tr>
								<tr><td>Email :</td><td>$ref1_email</td></tr>
                                                                   <h4>Reference #2</h4>
                                                              <tr><td>First name :</td><td>$ref2_fname</td></tr>
                                                                <tr><td>Last name:</td><td>$ref2_lname</td></tr>
								<tr><td>Phone Number :</td><td>$ref2_phoneno</td></tr>
								<tr><td>Email :</td><td>$ref2_email</td></tr>
                                                                   <h4>Reference #3</h4>
                                                                  <tr><td>First name :</td><td>$ref3_fname</td></tr>
                                                                <tr><td>Last name:</td><td>$ref3_lname</td></tr>
								<tr><td>Phone Number :</td><td>$ref3_phoneno</td></tr>
								<tr><td>Email :</td><td>$ref3_email</td></tr>
								</table>
                                                                 <h3>Terms of Service</h3>
								<table>
								<tr><td>signature:</td><td> $sign</td></tr>
								
								</table>
                                                                
								";

				

    $headers = "From: ".$email_from;


    $file = fopen($fileatt,'rb');
    $data = fread($file,filesize($fileatt));
    fclose($file);

    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";

    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";

    $data = chunk_split(base64_encode($data));
if(!empty($filename)){
    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: {$fileatt_type};\n" .
    " name=\"{$fileatt_name}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $data .= "\n\n" .
    "--{$mime_boundary}--\n";
}
				
  	$ok = @mail($email_to, $email_subject, $email_message, $headers);
       $to_client = $emailaddress;
						$subject_client = "Confirmation from R.E.P.U, INC";
						$message_client = "We have recieved you message successfully. We will be reviewing it and will let you know soon!";
						$headers_client = "MIME-Version: 1.0" . "\r\n";
						$headers_client .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
						$headers_client .= "From: ".$from;
						$mail_client=mail($to_client,$subject_client,$message_client,$headers_client);


   				
				 if($ok)
                                    { 
                                          echo"Your Application has been sent successfully";
                                          header('Location: http://www.repu.nyc/volunteer/?sent=1');
                                    }	 
                                else
                                    {
                                        echo "<p class='esuccess'>Oops.. Some error occured. Please try back later.</p>";
                                    }
				
		}
		
		?>
