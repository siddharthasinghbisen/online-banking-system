<!DOCTYPE html>
<head>
      <title>ONLINE PAYMENT MANAGEMENT</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script type="text/javascript" src="js/jquiery.min.js"></script>
     
</head>

<body background="partners.jpg">
  <div class="wrapper">
      <header>
        <nav>
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i> 
          </div>   
<!-- lng photo as LOGO -->
          <div class="logo">
            ONLINE PAYMENT
          </div>

          <div class="menu">
            <ul>
              <!-- <li><a href="#">Home</a></li> -->
             <!--  <li><a href="#">About</a></li> -->
              <li><a onclick="document.getElementById('id02').style.display='block'"  style="width:auto;">Transfer funds</a></li>
              <li><a href="form.php">Add Payee</a></li>
              <li><a href="formtwo.php">Add Funds</a></li>

              
             
               <!-- <?php
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
    echo " My Balance:" . $row["amount"]  ;
}
}
           ?>  -->
            <li><a href="index.html">Log out</a>
             </li>
   <!--              <img src="slider1.jpg" class="myslides" width=100%>
  <img src="slider2.jpg" class="myslides" width=100%> -->
            </ul>
          </div>
          
        </nav>
        <div class="golng">
          <h1>Welcome     <?php
          session_start();
          echo $_SESSION['username'];
          ?></h1>
       
       <!--     <a class="btn" href="membersellerinfo.html">Seller</a>  

            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <a class="btn" href="memberbuyerinfo.html">Buyer</a>   -->

        </div>  


      </header>
   </div>






<div id="id02" class="modal">
  
  <form class="modal-content animate" action="transfer.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>

    <div class="container">
      <label for="from"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="from" >
      <!-- "<?php
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
    echo   " " . $row["name"] ;
}
}
           ?>" -->

      <label for="amount"><b>Amount</b></label>
      <input type="text" placeholder="Enter amount" name="amount" required>
      <label for="recepient"><b>Recepient</b></label>  

        <input type="text" placeholder="Enter recepient name" name="to">
            <button type="submit" style="background-color:  #000000">Submit</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>

       </div>
       </div>
       </div>
      </section> 
      <script type="text/javascript"
          src = "js/popup.js">
      </script> 
 <!-- 
<script type="text/javascript">
  

var myindex=0;
slides();
function slides(){
  var i;
  var x=document.getElementsByClassName("myslides");
  for ( i = 0;i<x.length;i++)
  {
    x[i].style.display ="none";
  }
  myindex++;
     if (myindex > x.length) {myindex = 1}    
    x[myindex-1].style.display = "block";  
    setTimeout(slides, 2000); // Change image every 2 seconds
}
</script> -->
</body>
</html>