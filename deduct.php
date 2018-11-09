<?php
$host="localhost";
$user="root";
$password="";
$db="payment";

$con = mysqli_connect($host,$user,$password,$db);
 $username = mysqli_real_escape_string($con, $_POST['from']); 
  $recname = mysqli_real_escape_string($con, $_POST['to']); 

  $givamount = mysqli_real_escape_string($con, $_POST['amount']);
  //check if user exist in table
  $sql = "SELECT * FROM billing_address WHERE name = '".$recname."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>=1)
       {
        echo"name already exists/n";
  //get data from table
  $getinfo = "SELECT amount from pay where name = '".$username."'"; 
    if ($result=mysqli_query($con,$getinfo))
  {
  while ($obj=mysqli_fetch_object($result))
    {
    echo $obj->amount;
    $addobj = $obj->amount;
    }
  // Free result set
  mysqli_free_result($result);
    $updateamount = $obj +  $givamount;
    echo $updateamount - $addobj; 
    $newaddedamount = $addobj - $updateamount; 
//update amount
      $sqlup = "UPDATE pay SET amount='".$newaddedamount."' WHERE name = '".$username."'";

if (mysqli_query($con, $sqlup)) {
    echo "Record updated successfully";
}
else
{
    echo "not updated";
}

}
else
{
   echo'something went wrong.';
}
  }
    else
        {  
                    echo"name already not exists";

}
  ?>
