<?php

$link = mysqli_connect('localhost','root','','lms');
session_start();

$i = mysqli_real_escape_string($link,$_POST['index']);
$p = mysqli_real_escape_string($link,$_POST['pass']);


$sql = "SELECT * FROM new_acnt WHERE indexNumber = '$i' AND password = '$p'";


$res = mysqli_query($link,$sql);

$row = mysqli_fetch_array($res);
      
$count = mysqli_num_rows($res);


if($row[4] == $i && $row[1] == $p){
     $_SESSION['login_index'] = $i;
     $_SESSION['name_initials'] = $row[5];  
     header('location:welcome.php');
 }
else{
   echo "your login name or password is invalid";
}
?>

