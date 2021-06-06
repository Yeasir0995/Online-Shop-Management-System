<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['Login'];
   
   $ses_sql = mysqli_query($db,"select username from signin where fname = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['fname'];
   
   if(!isset($_SESSION['Login'])){
      header("location:login.php");
      die();
   }
?>