<?php
// server side-processing
$Error='';
$myEmail="joycodecamps@gmail.com";

if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
    $Error .="\n Error: all field are required";
}

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",$email)){
    $Error .="\n Error: invalid email address";
}

//submitting the input of the user to the site email...
if(empty($Error)){
    $to=$myEmail;
    $email_subject=$subject;

    $email_body="You have received a new message." . "Here a your details: \n Name:$name \n" . "Email:$email \n Message \n $message";
$headers="Reply-To:$email";

mail($to,$email_subject,$email_body,$headers);

//redirecting to contact.html
header('location:../index.php');
}