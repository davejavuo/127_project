<?php

 include('session.php');

 if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$amt = $_POST['amt'];


if($name !=''||$id !=''){
//Insert Query of SQL
$mysql = "insert into products(product_id, prod_name, prod_desc, prod_amt, prod_left) values ('$id', '$name', '$desc', '$amt', '0')"; 

if (mysqli_query($link, $mysql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $mysql . "<br>" . mysqli_error($link);
}
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
} 
mysqli_close($link);
$_POST = array();

            ?>


<html>
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
   	<div>
<!--HTML Form -->
      <div class="title">
        <h2 class="tab">Insert Data In Database Using PHP.</h2>
      </div>
      <form action="add.php" method="post">
      <!-- Method can be set as POST for hiding values in URL-->
      <h2 class="city">Form</h2>
      <label class="city">Product ID:</label>
        <br><input class="input" name="id" type="text" value=""><br>
      <label class="city">Name:</label>
        <br><input class="input" name="name" type="text" value=""><br>
      <label class="city">Description:</label>
        <br><input class="input" name="desc" type="text" value=""><br>
      <label class="city">Amount:</label>
        <br><input class="input" name="amt" type="text" value=""><br>
        <input type="reset" name="reset" id="reset" value="Reset" />
        <br><input id= "submit" type="submit" name="submit" value="Submit">  
      </form>
    </div>


   </body>
   
</html>