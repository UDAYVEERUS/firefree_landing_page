<?php 


$to = 'udayveerus348566@gmail.com';


$subject = "!! New Lead Received !!";
$senderEmail = $_POST['email']; // required

$message = '
<html>
<body>
<div style="background:#eceff0; padding:30px; font-family:Verdana, Geneva, sans-serif; font-size:13px;">
<div style="background:#fff; border:1px solid#ccc; padding:25px;">

<br>
The details are as:
<br><br>
<b>Name</b> : '.$_POST['name'].'.<br>
<b>Email</b> : '.$_POST['email'].'.<br>
<b>Number</b> : '.$_POST['phone'].'.<br>
<b>Message</b> : '.$_POST['message'].'.<br>

<br>
Lead Generated Successfully with above mentioned details.<br><br>

Thank you<br>

</div>
</div>
</body>
</html>
';

// Always set content-type when sending HTML email

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From:" . $senderEmail . "\r\n";



mail($to,$subject,$message,$headers);
 header('Location: thank-you.html'); 
    // echo("Mail sent Successfullly. Go back to your Landing Page");
?>  