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

        input[type=text], select {
          width: 50%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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
   	<div>
<!--HTML Form -->
      <div class="title">
        <h2>Insert Data In Database Using PHP.</h2>
      </div>
      <form action="add.php" method="post">
      <!-- Method can be set as POST for hiding values in URL-->
      <h2>Form</h2>
      <label>Product ID:</label>
        <br><input class="input" name="id" type="text" value=""><br>
      <label>Name:</label>
        <br><input class="input" name="name" type="text" value=""><br>
      <label>Description:</label>
        <br><input class="input" name="desc" type="text" value=""><br>
      <label>Amount:</label>
        <br><input class="input" name="amt" type="text" value=""><br>
        <input type="reset" name="reset" id="reset" value="Reset" />
        <br><input id= "submit" type="submit" name="submit" value="Submit">  
      </form>
    </div>


   </body>
   
</html>