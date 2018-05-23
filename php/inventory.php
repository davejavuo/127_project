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

      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
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
      <table id="customers">
        <tr>
          <th>One</th>
          <th>Two</th>
          <th>Three</th>
          <th>Four</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Berglunds snabbköp</td>
          <td>Christina Berglund</td>
          <td>Sweden</td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
      </table>


      <h2><a href = "Login.php">Sign Out</a></h2>
    

    <!--   Core JS Files   -->
   </body>
   
</html>