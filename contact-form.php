<?php
$ToEmail = 'ask@ask.edu.kw'; // CHANGE YOUR EMAIL HERE
$EmailSubject = 'Site Contact Form';
$mailheader = "From: ".$_POST["emailAddress"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["emailAddress"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["fullName"]." ";
$MESSAGE_BODY .= "Email: ".$_POST["emailAddress"]." ";
$MESSAGE_BODY .= "Nationality: ".$_POST["nationality"]." ";
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])." ";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
