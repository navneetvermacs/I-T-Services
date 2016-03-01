<?php

 $Form_name = $_POST['name']; 
 $email_address = $_POST['email']; 
 $Form_phone = $_POST['phone']; 
 $Form_message = $_POST['message']; 
 $to = "query@irateeshaservices.co.in";
 $subject = "Website Contact Form:"$Form_name;
 $Form_message .= "\nContact Details: \r\n Email Address: <h1>"$email_address."</h1>\r";
 $Form_message .= "Phone No.:<h1>"$Form_phone."</h1>";
 $header = "From: noreply@irateeshaservices.co.in  \r\n";
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";
         
 $retval = mail ($to,$subject,$Form_message,$header);
         
 if( $retval == true ) {
  echo "Message sent successfully...";
 }else {
  echo "Message could not be sent...";
 }
?>
