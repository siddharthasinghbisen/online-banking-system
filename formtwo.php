<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="payment.css">

</head>
<body>

<h2>Payment</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="updatefund.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Add Funds</h3>
            <label for="fname"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John"   >
            <label for="email"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="xxx@example.com " value=""> <!-- <?php
$conn = mysqli_connect("localhost", "root", "", "payment");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  
  $sql = "SELECT email FROM pay";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo   " " . $row["email"] ;
}
}
           ?>" readonly> -->
       <!--      <label for="adr">></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="515th Street">
            <label for="city"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Karlskrona">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div> -->

          <div class="col-50">
            <h3>Payment</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Johnhujg">
            <label for="ccnum">Debit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">

              </div>
              <label>Enter the amount</label>
              <input type="text" name="money">
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>