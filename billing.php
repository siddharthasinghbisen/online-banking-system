<?php
$host="localhost";
$user="root";
$password="";
$db="payment";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn)
{
    
    $uname=$_POST['fname'];
    $ema= $_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $amount=$_POST['amount'];
    
    $sql = "INSERT INTO  billing_address (name,email,address,city,state,zip,amount)  VALUES ('$uname','$ema','$address','$city','$state','$zip','$amount')" ; //need to change
    // $sql1 = "UPDATE billing_address SET amount=$amount+(SELECT amount From billing_address )WHERE name='".$_SESSION['username']."' WHERE name='".$_SESSION['username']."'";
    //  $sql1 = "UPDATE billing_address SET amount= (amount From billing_address )WHERE name='".$_SESSION['username']."' WHERE name='".$_SESSION['username']."'";


    
    $result=mysqli_query($conn,$sql);
    $_SESSION['username']=$uname;
       header("Location: homemem.php");
    $data = mysql_query ($sql)or die(mysql_error()); 
    if($data) 
        {   
            echo "YOUR REGISTRATION IS COMPLETED..."; 
        }
}
else
{
	echo "cannot connect";
}




?>