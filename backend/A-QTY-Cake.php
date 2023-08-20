<title>หน้าแรก</title>
<?php 
    session_start();
    include('Connect.php');
    include('A-head.php');
?>

<?php

/*$sql2="SELECT * FROM product_info INNER JOIN order_cart_detail ON product_info.PD_NO = order_cart_detail.PD_NO;";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);*/
 
$sql="SELECT PD_NO,COUNT(QTY) FROM order_cart_detail GROUP BY PD_NO ORDER BY PD_NO DESC ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

 ?>

<div class="container">
  <h2>จำนวนสินค้าแต่ละออเดอร์</h2>

    <h2>          </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">รหัสสินค้า</th>
          <th scope="col">จำนวน</th>
        </tr>
      </thead>
  
<?php 

while ($row = mysqli_fetch_array($result)) {

?>
<?php 

//while ($row2 = mysqli_fetch_assoc($result2)) {

?>
<tbody>
            <!--<td><?//=$row2['PD_Name'] ?></td> -->
            <td><?=$row['PD_NO'] ?></td>
            <td><?=$row['COUNT(QTY)'] ?></td>
      </tbody>

<?php } ?>
    </table>
</div>
<?php //} ?>

<br>
<br>
<br>
<br>
<?php include('footer.php');?>
