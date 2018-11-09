<?php
$host="localhost";
$user="root";
$password="";
$db="lng";
 
$con = mysqli_connect($host,$user,$password,$db);
 
if(isset($_POST['name'])){
    
    $uname=$_POST['name'];
    $password=$_POST['psw'];
    
    $sql="SELECT * from usersignup where name='".$uname."'AND psw='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        header("Location: userhome.html");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>