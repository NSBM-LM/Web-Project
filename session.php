<?php
$link = mysqli_connect('localhost','root','','lms');

  session_start();


   if(!isset($_SESSION['login_index'])){
      header("location:login.php");
   }
?>