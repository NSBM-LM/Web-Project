<?php
$u = $_POST['un'];
$p = $_POST['pw'];
$re = $_POST['repw'];
$e = $_POST['em'];
$i = $_POST['in'];
$n = $_POST['ni'];
$b = $_POST['btc'];
$f = $_POST['fac'];
$t = $_POST['ci'];
$c = $_POST['cou'];

$sql = "INSERT INTO New_acnt
        VALUES('$u','$p','$re','$e','$i','$n','$b','$f','$t','$c')";

$link = mysqli_connect('localhost','root','','lms');

$res = mysqli_query($link,$sql);

if($res == 1)
   echo "Successfully created your account.Please remember your username & password for login";
  
else 
   echo "Please try again.";
?>