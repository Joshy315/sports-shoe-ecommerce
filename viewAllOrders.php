<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Customer</th>
        <th>Number</th>
        <th>Email</th>
        <th>Payment Method</th>
        <th>Product</th>
        <th>Total price</th>
     </tr>
    </thead>
     <?php
      @include 'config.php';
      $sql="SELECT * from orderdata";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["id"]?></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["number"]?></td>
          <td><?=$row["email"]?></td>
          <td><?=$row["method"]?></td>
  <!--<td><?=$row["flat"]?></td>
          <td><?=$row["street"]?></td>
          <td><?=$row["city"]?></td>
          <td><?=$row["state"]?></td>
          <td><?=$row["country"]?></td> -->
          <td><?=$row["total_product"]?></td>
          <td><?=$row["price_total"]?></td>
        </tr>
    <?php
            
        }
      }
      else{
        echo "No orders found";
      }
      
    ?>
     
  </table>
