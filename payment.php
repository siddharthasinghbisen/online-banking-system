
<?php
$host="localhost";
$user="root";
$psw="";
$db="payment";


// $uid=$_POST['from1'];
if(isset($_POST['name'])){
    $conn=mysqli_connect($host,$user,$psw,$db);
   $uname= $_POST['from'];
$pass= $_POST['pass'];
    
$sql="INSERT INTO pay (name,password) VALUES ('$uname','$pass')";
    
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



// $value=$_POST['from2'];



?>
