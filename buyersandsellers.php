<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
  <div id="a">
   <h1><u>All buyers and there investment table</u></h1>
 <table>
 <tr>
  <th>Organization Name</th> 
  <th>Quantity to but</th> 
  <th>investment to purchase</th>
  <th>previous buissness partner</th> 
  <th>total amount invested</th> 
  <th>Years of partnership</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "lng");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT urcname, quantity, investment, cname, amntinvested, years FROM memberbuyerinfo";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["urcname"]. "</td><td>" . $row["quantity"] . "</td><td>"
. $row["investment"]. "</td><td>" . $row["cname"] . "</td><td>"  . $row["amntinvested"] . "</td><td>"  . $row["years"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<div id="b">
  <h1><u>All sellers and there investment table</u></h1>
 <table>
 <tr>
  <th>Organization Name</th> 
  <th>Quantity to sell</th> 
  <th>cost</th>
  <th>previous buissness partner</th> 
  <th>total amount invested</th> 
  <th>Years of partnership</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "lng");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT urcname, quantity, investment, cname, amntinvested, years FROM membersellerinfo";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["urcname"]. "</td><td>" . $row["quantity"] . "</td><td>"
. $row["investment"]. "</td><td>" . $row["cname"] . "</td><td>"  . $row["amntinvested"] . "</td><td>"  . $row["years"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>


</div>   
</body>
</html>


