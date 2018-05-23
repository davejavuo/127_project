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
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
   </head>
   
   <body>
      <ul>
        <li class="hori"><a class="active" href="#home">Home</a></li>
        <li class="hori"><a href="#news">News</a></li>
        <li class="hori"><a href="#contact">Contact</a></li>
        <li class="hori"><a href="#about">About</a></li>
      </ul>
      <h1 class="city">Welcome, <?php echo $login_session; ?>!</h1> 
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
            <td><input type="button" name="edit" id="edit" value="Edit" /></td>
          </tr>
        <?php }
          } else {
              echo "0 results";
          } 
        ?>
        </table>
      <h2><a href = "logout.php" class="button" >Sign Out</a></h2>
   </body>
   
</html>