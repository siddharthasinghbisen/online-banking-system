<?php  
 //sort.php  
 $connect = mysqli_connect("localhost", "root", "", "lng");  
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM membersellerinfo ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysqli_query($connect, $query);  
 $output .= '  
 <table class="table table-bordered">  
      <tr>  
           <th><a class="column_sort" id="urcname" data-order="'.$order.'" href="#">urcname</a></th>  
           <th><a class="column_sort" id="quantity" data-order="'.$order.'" href="#">quantity</a></th>  
           <th><a class="column_sort" id="investment" data-order="'.$order.'" href="#">investment</a></th>  
           <th><a class="column_sort" id="cname" data-order="'.$order.'" href="#">cname</a></th>  
           <th><a class="column_sort" id="amntinvested" data-order="'.$order.'" href="#">amntinvested</a></th> 
           <th><a class="column_sort" id="years" data-order="'.$order.'" href="#">years</a></th>   
      </tr>  
 ';  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
      <tr>  
           <td>' . $row["urcname"] . '</td>  
           <td>' . $row["quantity"] . '</td>  
           <td>' . $row["investment"] . '</td>  
           <td>' . $row["cname"] . '</td>  
           <td>' . $row["amntinvested"] . '</td>  
           <td>' . $row["years"] . '</td>
      </tr>  
      ';  
 }  
 $output .= '</table>';  
 echo $output;  
 ?>  