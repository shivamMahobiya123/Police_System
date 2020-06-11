<?php
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$toemail=$_POST['emailsend'];
$mailsubject=$_POST['mailsubject'];
$message=$_POST['message'];

if(isset($_POST['submit']))
{
$to_email = $toemail;
$subject = $mailsubject;
$body =$message;
$headers = "From: shivamggct@gmail.com";

if (mail($toemail, $subject, $body, $headers)) {
    echo "Email successfully sent to $toemail...";
} else {
    echo "Email sending failed...";
}

}
?>