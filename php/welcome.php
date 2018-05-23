<?php
   include('session.php');
?>
<html">
   
   <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Welcome!
    </title>
    <style>
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }

      .hori {
          float: left;
      }

      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }

      li a:hover {
          background-color: #111;
      }
      .active {
        background-color: #4CAF50;
      }

      .horizontal {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        border: 1px solid #555;
      }

      .hor {
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
      }

      .hor {
          text-align: center;
          border-bottom: 1px solid #555;
      }

      li:last-child {
          border-bottom: none;
      }

      .hor:hover:not(.active) {
          background-color: #555;
          color: white;
      }
      .button {
            background-color: #000009; /* Green */
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
      }
      html {
          background: rgba(25, 25, 25, 0.7);
      }
    </style>
   </head>
   
   <body>
   	  <ul>
        <li class="hori"><a class="active" href="#home">Home</a></li>
        <li class="hori"><a href="#news">News</a></li>
        <li class="hori"><a href="#contact">Contact</a></li>
        <li class="hori"><a href="#about">About</a></li>
      </ul>
      <h1>Welcome <?php echo $login_session; ?></h1>

      <ul class="horizontal">
        <li><a class="hor" href="inventory.php">Inventory</a></li>
        <li><a class="hor" href="#news">News</a></li>
        <li><a class="hor" href="#contact">Contact</a></li>
        <li><a class="hor" href="#about">About</a></li>
      </ul>
      <h2><a href = "Login.php" class="button">Sign Out</a></h2>
	  

	  <!--   Core JS Files   -->
   </body>
   
</html>