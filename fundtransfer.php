<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="payment";
 
// $con = mysqli_connect($host,$user,$password,$db);
 
if(isset($_POST['name'])){
    
    $uname=$_POST['sender'];
    $amount=$_POST['money'];
    $recepient=$_POST['Recepient'];
    
  $sql = "SELECT name FROM Billing_address";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["amount"] . "</td><td>"
. $row["investment"]. "</td><td>" . $row["cname"] . "</td><td>"  . $row["amntinvested"] . "</td><td>"  . $row["years"] . "</td></tr>";
}





//$sql = "UPDATE Billing_address SET name='$row["name"] ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// echo $name;
// echo $balance;

// if($uname==$name && $amount<=$balance)
// {
//     $query="UPDATE Billing_address SET amount='$amount' WHERE name='$recepient'";
// }
// else
// {
//     echo " low balance";
// }




    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        $_SESSION['username']=$uname;
       header("Location: homemem.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}


$conn = new mysqli($host, $user, $password, $db);
// Check connection






?>