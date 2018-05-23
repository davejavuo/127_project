<?php
   include('session.php');
            ?>



<html">
   
   <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="../assets/img/kit/free/favicon.png">
    <title>
        Welcome!
    </title>

    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
   </head>
   
   <body>
   	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  	<div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
      <h1>Welcome <?php echo $login_session; ?></h1> 
     <h2>inventory</h2>
    <?php

            $mysql = "SELECT * FROM products";
             $result = $link->query($mysql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Product ID: " . $row["product_Id"]. " Product Name: " . $row["prod_name"]. "Product Description: " . $row["prod_desc"]. "<br>";
            }
        } else {
            echo "0 results";
        }

  ?>
      
      <h2><a href = "logout.php">Sign Out</a></h2>
	  

	  <!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/bootstrap-material-design.js"></script>

	<!-- Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="/assets/js/plugins/moment.min.js"></script>
	  

	<!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

	<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="/assets/js/plugins/nouislider.min.js"></script>

	<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
	<script src="/assets/js/material-kit.js?v=2.0.0"></script>
   </body>
   
</html>