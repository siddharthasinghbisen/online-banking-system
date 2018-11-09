<?php
$host="localhost";
$user="root";
$password="";
$db="payment";

$con = mysqli_connect($host,$user,$password,$db);
 $username = mysqli_real_escape_string($con, $_POST['fname']); 
  $givamount = mysqli_real_escape_string($con, $_POST['money']);

 $sqlup = "UPDATE pay SET amount='".$givamount."' WHERE name = '".$username."'";
 if (mysqli_query($con, $sqlup)) {
    echo "Record updated successfully";
}
else
{
    echo "not updated";
}
?>