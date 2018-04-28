<?php
   include('../config/config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select emp_username from employee where emp_username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['emp_username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }
?>