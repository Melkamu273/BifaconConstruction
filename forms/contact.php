<?php
echo "contact";
//   $receiving_email_address = 'melkamu372@gmail.com';
//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/phpmailer/src/PHPMailer.php')) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];


//   $to      = 'tesfasebsibacew@gmail.com';
//   $subject = 'the subject';
//   $message = 'hello test';
//   $headers = 'From: bifacon@bifacon.com'       . "\r\n" .
//               'Reply-To: info@bifacon.com' . "\r\n" .
//               'X-Mailer: PHP/' . phpversion();
              
              
            //   echo 

    // echo mail($to, $subject, $message, $headers);
    
    
    $to = 'tesfasebsibacew@gmail.com';
    $subject = 'new test' ;
    $body = "<div> hi hi .. </div>";

    $headers = 'From: info@bifacon.com' . "\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
    if(mail($to, $subject, $body,$headers)) {
      echo('<br>'."Email Sent. ".'</br>');
      } 
      else 
      {
      echo("<p>Email Message delivery failed...</p>");
      }
  
    // echo "<br>mail sent ...";
    
    
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
?>
