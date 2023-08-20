<title>ค้นหาคำสั่งซื้อ</title>
<?php include('Connect.php');
$word = $_POST["word"];
$sql = "SELECT * FROM order_cart WHERE Order_No LIKE '%$word%' OR Username LIKE '%$word%' ORDER BY Order_No ASC ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); 
$order = 1;
?>
<?php include('T-head.php');?>

<div class="container">
    <h2>ค้นหาคำสั่งซื้อ</h2>

<table>

<td><a type="button" class="btn btn-warning" href="T-order_w.php">รอดำเนินการ</a></td>
<td>      </td>
<td><a type="button" class="btn btn-primary" href="T-order_pending.php">รอชำระเงิน</a></td>
<td>      </td>
<td><a type="button" class="btn btn-success" href="T-order_ss.php">ชำระเงินเรียบร้อย</a></td>
<td>      </td>
<td><a type="button" class="btn btn-danger" href="T-order_cc.php">ยกเลิกคำสั่งซื้อ</a></td>
  <form name="fsearch" method="post" action="T-manageorderSearch.php">
    <div class="row height d-flex justify-content-end align-items-end">
        <div class="col-md-3">
    <div class="search">
      <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
        <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
        <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
    </div>
        </div>
    </div> 
  </form>
</table>
<h2>     </h2>
<?php if ($count > 0) { ?>
    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th scope="col">เลขที่สั่งซื้อ</th>
          <th scope="col">ชื่อผู้สั่ง</th>
          <th scope="col">ราคารวมสุทธิ</th>
          <th scope="col">ประเภทการชำระเงิน</th>
          <th scope="col">สถานะคำสั่งซื้อ</th>
          <th scope="col">ผู้แก้ไขข้อมูล</th>
          <!--<th scope="col">วันรับสินค้า</th>-->
          <th scope="col">จัดการ</th>
          <th scope="col">ยกเลิกคำสั่งซื้อ</th>
        </tr>
      </thead>

<tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) {
    $StatusNo=$row['StatusNo']?>
    <tr>

            <td><?php echo $row['Order_No']; ?></td>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['price_total']; ?></td>
            <td><?php echo $row['PaymentID']; ?></td>
            <td><?php 
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
            <td><?php echo $row['cart_edit_name']; ?></td>
            
            <td><a type="button" class="btn btn-warning" href="T-order_detail.php?Order_No=<?=$row['Order_No']?>" onclick="return confirm('คุณต้องการจัดการคำสั่งซื้อหรือไม่');">จัดการ</a></td>
            <td><a type="button" class="btn btn-danger" href="cancel_order.php?Order_No=<?=$row['Order_No']?>" onclick="return confirm('คุณต้องการยกเลิกคำสั่งซื้อหรือไม่');">ยกเลิก</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php } else { ?>
          <div class="alert alert-danger">
                <b>ไม่พบข้อมูล</b>
          </div>
    <?php } ?>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-danger"href="T-manageorder.php">ย้อนกลับ</a>
    </div>


<br>
<br>
<br>
<br>
<br>
</div>
<?php include('footer.php');?>