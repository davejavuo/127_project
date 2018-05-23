<?php
   include("../config/config.php");
   session_start();
   $error = NULL;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      
      $sql = "SELECT emp_username FROM employee WHERE emp_username = '$myusername' and emp_password = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   

<head>
   <title> Login Form </title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
   <div class="loginbox">
   <img src="../images/avatar.png" class="avatar">
      <h1>Employee Login Portal</h1>
      <form action = "" method = "post">
         <p>Username</p>
         <input type="text" name="username" placeholder="Enter Username" >
         <p>Password</p>
         <input type="password" name="password" placeholder="Enter Password">
         <input type="submit" name="" value="Submit">  
         
         <a href="#">Lost your password?</a><br>
         <a href="#">Don't have an account?</a>
      </form>
      <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>           
   </div>
   <div> 
</body>
</html>