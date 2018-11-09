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
    
    $sql="SELECT * from pay where name='".$uname."'AND password='".$pass."' limit 1";
    
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
?>