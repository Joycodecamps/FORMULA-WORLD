<?php

if( isset($_POST['submit'])){
    echo  "Error! you need to submit the your feedback ";
}


$email=$_POST['email'];
$message= $_POST['message'];


# validation
if (empty($_POST['email']) || empty($_POST['message'])){
    echo "please enter email and your message";
}

//emailing the form
$AdmistratorEmail="joycodecamps@gmail.com";
$EmailSubject="feedback submisssion";

$EmailBody=" You have receive feedback from " . $email . " Here is your message:\n $message ";

$to= $AdmistratorEmail;
$header="from: $AdmistratorEmail \r\n";

//send the Email
mail($to,$EmailSubject,$EmailBody,$header);

// Direction of the page
header('location:../index.php'); 