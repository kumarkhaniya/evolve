<?php
// Read POST request params into global vars
$to      = "ajay.khatik@wabodryms.com, akhilesh@evolvelearningsolutions.com,mehul.kanjariya@wabodryms.com";
$from    = $_POST['email'];
$subject = $_POST['message'];
$message = $_POST['message'];


$message = $messageBody = "<html>
				<h2 style='color:#00AEEF;'>Evolve Learning Solutions</h2>
				<table border='1' cellpadding='0' cellspacing='0' width='30%' style='background-color: #E7ECEF;'>
				<tr style='height: 50px;'><td align='center'>First Name :</td> <td align='center'>".$_POST['fname']."</td></tr>
				
				<tr style='height: 50px;'><td align='center'>Last Name : </td> <td align='center'> ".$_POST['lname']."</td></tr>
				
				<tr style='height: 50px;'><td align='center'>Mobile Number : </td> <td align='center'> ".$_POST['phone']."</td></tr>
				
				<tr style='height: 50px;'><td align='center'>Email : </td> <td align='center'>".$_POST['email']."</td></tr>

				<tr style='height: 50px;'><td align='center'>Your Company Name: </td> <td align='center'>".$_POST['company']."</td></tr>
				
				<tr style='height: 50px;'><td align='center'>Message : </td> <td align='center'>".$_POST['message']."</td></tr>
				</table>
			</html>";


// Obtain file upload vars
 $fileatt      = $_FILES['fileatt']['tmp_name'];
 $fileatt_type = $_FILES['fileatt']['type'];
 $fileatt_name = $_FILES['fileatt']['name'];
$aa=filesize($fileatt);
 $headers = "From: $from";

if (is_uploaded_file($fileatt)) {
  // Read the file to be attached ('rb' = read binary)
  $file = fopen($fileatt,'rb');
  $data = fread($file,filesize($fileatt));
  fclose($file);

  // Generate a boundary string
  $semi_rand = md5(time());
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

  // Add the headers for a file attachment
  $headers .= "\nMIME-Version: 1.0\n" .
              "Content-Type: multipart/mixed;\n" .
              " boundary=\"{$mime_boundary}\"";

  // Add a multipart boundary above the plain message
  $message = "This is a multi-part message in MIME format.\n\n" .
             "--{$mime_boundary}\n" .
             "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
             "Content-Transfer-Encoding: 7bit\n\n" .
             $message . "\n\n";

  // Base64 encode the file data
  $data = chunk_split(base64_encode($data));

  // Add file attachment to the message
  $message .= "--{$mime_boundary}\n" .
              "Content-Type: {$fileatt_type};\n" .
              " name=\"{$fileatt_name}\"\n" .
              //"Content-Disposition: attachment;\n" .
              //" filename=\"{$fileatt_name}\"\n" .
              "Content-Transfer-Encoding: base64\n\n" .
              $data . "\n\n" .
              "--{$mime_boundary}--\n";
}

// Send the message
$ok = @mail($to, $subject, $message, $headers);
if ($ok) {
  //$javascript = "<script type=\"text/javascript\">";
  //$javascript .= 'alert(\'Thank you for your enquiry, we shall contact you soon.\')';
  //echo '<p>Your Inquiry has been Successfully Submitted&nbsp;<a href="http://evolvelearningsolutions.com/">home</a></p>';
  //header("Location:http://www.evolvelearningsolutions.com/");
  
   echo '<script type="text/javascript">alert("Your message has been sent!");</script>';
       // <script type="text/javascript">  window.location='http://www.evolvelearningsolutions.com/';  </script>
       // header('Location:http://www.evolvelearningsolutions.com/');
       // exit();
        
        }
       
   else {
  //echo '<p> Sorry! Your Inquiry has not been Successfully Submitted&nbsp;<a href="http://evolvelearningsolutions.com/">home</a></p>';
  //header("Location:http://www.evolvelearningsolutions.com/");
        $javascript .= 'alert(\'Email cannot be delivered.\')';
}

if (isset($_POST['submit'])) {
        $_SESSION['msg']="Updation successfully completed";
        
        header("Location: http://www.evolvelearningsolutions.com/Contact");
       die();
        }

?>
