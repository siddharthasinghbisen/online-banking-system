<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="ui.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="jquiery.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="row">
<div class="sidenav"  class="col-sm-4" >
 

  <a href="#">
              <?php
$conn = mysqli_connect("localhost", "root", "", "payment");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT name FROM pay";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo  " " . $row["name"] ;
}
}
           ?>

            </a>
  <a href="#"><?php
$conn = mysqli_connect("localhost", "root", "", "payment");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT amount FROM billing_address";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo  " " . $row["amount"] . " " . " $" ;
}
}
           ?> </a>
           
  <a href="#">Services</a>
  <a href="#">Clients</a>
</div>
  <div class="col-sm-8"   style="background-color: #DED9D8  ">

    <img src="background.jpg" class="img-thumbnail" alt="Cinque Terre" style="width:100%">
  </div>
</div>
    </div>
</body>
</html> 
