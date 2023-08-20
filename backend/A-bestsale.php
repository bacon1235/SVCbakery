<title>รายละเอียดคำสั่งซื้อ</title>
<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

$sql3 = "SELECT * FROM order_cart AS c INNER JOIN order_cart_detail AS d ON (c.Order_No=d.Order_No)
INNER JOIN product_info AS p ON (d.PD_NO=p.PD_NO) WHERE Username = '$_REQUEST[Username]' ";
$result3 = mysqli_query($conn, $sql3);
//$row=mysqli_fetch_array($result3);
?>

<div class="container">
    <h2>รายละเอียดคำสั่งซื้อ</h2>

    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">เลขที่สั่งซื้อ</th>
          <th scope="col">ชื่อสินค้า</th>
          <th scope="col">จำนวน</th>
          <th scope="col">ราคารวม</th>
          <th scope="col">ประเภทการชำระเงิน</th>
          <th scope="col">สถานะคำสั่งซื้อ</th>
          <th scope="col">วันรับสินค้า</th>
          <th scope="col"></th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($result3 as $row) {
          $StatusNo=$row['StatusNo'] ?>
        <tr>
          <td><?php echo $row['Order_No']; ?></td>
          <td><?php echo $row['PD_Name']; ?></td>
          <td><?php echo $row['QTY']; ?></td>
          <td><?php echo $row['price_total']; ?></td>
          <td><?php echo $row['PaymentID']; ?></td>
          <td>
              <?php 
                if($StatusNo==1){
                    echo "<b style='color:blue' >รอชำระเงิน</b>";
                }elseif($StatusNo==2){
                    echo "<b style='color:purple' >ชำระเงินเรียบร้อย</b>";
                }elseif($StatusNo==3){
                    echo "<b style='color:green' >รับสินค้าเรียบร้อย</b>";
                }elseif($StatusNo==4){
                    echo "<b style='color:red' >ยกเลิกคำสั่งซื้อ</b>";
                }elseif($StatusNo==5){
                    echo "<b style='color:orange' >รอดำเนินการ</b>";
                }
            ?>
          </td>
          <td><?php echo $row['order_ss']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

</div>