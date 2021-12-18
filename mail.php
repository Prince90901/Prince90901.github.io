<?php
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['massage'];
$to = "downlandmains@gmail.com";
$subject = "Mail From Website";
$txt = "First Name = ". $fname . "\r\n Last Name = ". $lname . "\r\n Email = ". $email . "\r\n Message = ". $message;
$headers = "From noreply@yoursite.com". "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thankyou.html");
?>
