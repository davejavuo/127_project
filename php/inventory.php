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
      .tab { 
        margin-left: 10px;
      }
      .city {
        background-color: tomato;
        color: white;
        padding: 10px;
      }
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
      <h1>Welcome, <?php echo $login_session; ?>!</h1> 
      <h2 class="tab">Inventory</h2>
      <table id="customers">
        <tr>
          <th>ProductID</th>
          <th>Product Name</th>
          <th>Product Description</th>
          <th>Quantity</th>
        </tr>
        <?php 
          $mysql = "SELECT * FROM products";
             $result = $link->query($mysql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {?>
          <tr>
            <td><?php echo $row["product_Id"]; ?></td>
            <td><?php echo $row["prod_name"]; ?></td>
            <td><?php echo $row["prod_desc"]; ?></td>
            <td></td>
            <td><input type="submit" name="edit" id="edit" value="Edit" /></td>
          </tr>
        <?php }
          } else {
              echo "0 results";
          } 
        ?>
        </table>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>