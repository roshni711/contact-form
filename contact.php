<?php

$name =$_POST['name'];
$visitor_email =$_POST['email'];
$message =$_POST['message'];



$email_from ='borhaderoshni711@gmail.com';
$email_subject ="new form submisstion"
$email_body ="user name:$name.\n". "user-email:$visitor_email.\n". "user_msg:$message.\n";


$to ="borhaderoshni711@gmail.com";
$headers ="from:$email_from \r\n";
$headers .="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body, $headers);

header("Location: thanks.html")
?>.