<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="payment";
 
$con = mysqli_connect($host,$user,$password,$db);
 
if(isset($_POST['name'])){
    
    $uname=$_POST['name'];
    $pass=$_POST['psw'];
    $ema=$_POST['email'];
    
    $sql="INSERT INTO  pay (name,email,password) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["psw"]."')";
    $sql1 ="INSERT INTO Billing_address(name,email) VALUES ('".$_POST["name"]."','".$_POST["email"]."')";
    
    $result=mysqli_query($con,$sql);
    echo"login successfull";
 $_SESSION['username']=$uname;
    // $head='homemem.php';
     header('Location:homemem.php');
  // echo "successful connection";
   // header("Location: index.html");*/
    
    /*if(mysqli_num_rows($result)==TRUE){
        echo " You Have Successfully Logged in";
        $_SESSION['username']=$uname;
       header("Location: homemem.php");
        exit();
    }
  /* if(!$result){
    echo "die";
   }
   else{
    header("Location: index.html");
   }
*/}
?>