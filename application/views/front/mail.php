<?php
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];




   $to="sanjay.hadiya@wabodryms.com"; //
   
    //Subject of the mail
    $subject="For Conatct";

   // Get the sender's name and email address plug them a variable to be used later
    $from = stripslashes($_POST['name']);
  // Get all the values from input
    
	$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
    $headers = "From: ".$from; 
    $headers .= "\nMIME-Version: 1.0\n" .  
            "Content-Type: multipart/mixed;\n" .  
            " boundary=\"{$mime_boundary}\"";  
     // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
	 $message = "<table>
	  <p style='color:#000fa7; font-size:1.3em;'>Wabodryms IT Solutions &#x02122;</p>
	     <tr><td >Name :</td><td >$name</td></tr>
		 <tr><td >Email :</td><td >$email</td></tr>
		 <tr><td >Subject :</td><td >$subject</td></tr>
		 <tr><td >Message :</td><td >$message</td></tr>
		</table>";
	 $message  .= "This is a multi-part message in MIME format.\n\n" .  
                "--{$mime_boundary}\n" .  
                "Content-Type:text/html; charset=\"iso-8859-1\"\n" .  
               "Content-Transfer-Encoding: 7bit\n\n" .  
         $message .= "\n\n";  
	  if (@mail($to, $subject, $message, $headers))
      {  

              echo "<script type='text/javascript'>alert('submitted successfully!'); window.location='User/index';</script>";
              
       ?>
		
		
	  
		
     <?php }
	  else
      {
		   ?>
          <script>
		   // alert("Error !! Unable to send Mail..");
		 //  window.location='index.html';
		  </script>
<?php
		
      }

}

?>