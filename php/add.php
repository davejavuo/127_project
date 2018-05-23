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
   	<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="add.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>

<label>id:</label>
<input class="input" name="id" type="text" value="">
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>desc:</label>
<input class="input" name="desc" type="text" value="">
<label>amount:</label>
<input class="input" name="amt" type="text" value="">
 <input type="reset" name="reset" id="reset" value="Reset" />
<input id= "submit"type="submit" name="submit" value="Submit">  
</form>
</div>
</div>


   </body>
   
</html>