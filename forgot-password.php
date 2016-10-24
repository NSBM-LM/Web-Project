<?php

$i = $_POST['in'];
$e = $_POST['em'];

$sql = "SELECT * FROM new_acnt WHERE indexNumber = '$i' OR eMail = '$e'";

$link = mysqli_connect('localhost','root','','lms');

$res = mysqli_query($link,$sql);

$row = mysqli_fetch_array($res);

if($i==$row[4] || $e==$row[3]){

$email = $row[3];

$subject = "NSBM-LMS";

$msg = "Hi,\n
Someone (probably you) has requested a new password for your\n
account on 'LMS - National School of Business Management:\n
To confirm this and have a new password sent to you via email,\n
go to the following web address:";

$msg = wordwrap($msg,70);

$headers = "From: gamersum.50@gmail.com";

mail($email,$subject,$msg,$headers);
header('location:return-lost-password.html');
}

else{
echo "Please try again";
}

?>