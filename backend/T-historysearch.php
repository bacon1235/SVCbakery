<title>ค้นหาประวัติการสั่งซื้อ</title>
<?php include('Connect.php');
session_start();
$Username=$_SESSION['Username'];
$word = $_POST["word"];
$sql = "SELECT * FROM order_cart AS c INNER JOIN order_cart_detail AS d ON (c.Order_No=d.Order_No)
INNER JOIN product_info AS p ON (d.PD_NO=p.PD_NO) WHERE PD_Name LIKE '%$word%' ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); 
$order = 1;
?>
<?php include('T-head.php');?>

<div class="container">
  <h2>ค้นหาประวัติการสั่งซื้อ</h2>

<table>
  <form name="fsearch" method="post" action="T-historysearch.php">
    <div class="row height d-flex justify-content-end align-items-end">
        <div class="col-md-3">
    <div class="search">
      <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
        <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
        <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
    </div>
        </div>
    </div> 
  </form>
</table>

<?php if ($count > 0) { ?>
<h2>          </h2>

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
        </tr>
      </thead>

    <?php 

        while ($row = mysqli_fetch_array($result)) {
            $StatusNo=$row['StatusNo'] ?>

<tbody>
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
                    echo "<b style='color:yellow' >ชำระเงินเรียบร้อย</b>";
                }elseif($StatusNo==3){
                    echo "<b style='color:green' >รับสินค้าเรียบร้อย</b>";
                }elseif($StatusNo==4){
                  echo "<b style='color:orange' >รอดำเนินการ</b>";
                }
            ?>
          </td>
          <td><?php echo $row['order_ss']; ?></td>
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
        <a class="btn btn-danger"href="T-history.php">ย้อนกลับ</a>
    </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>