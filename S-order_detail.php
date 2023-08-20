<title>รายละเอียดคำสั่งซื้อ</title>

<?php include('Connect.php');
session_start();
include('req_login.php');
$Order_No=$_GET['Order_No'];
$Username=$_SESSION['Username'];

$sqll = "SELECT * FROM allmember WHERE Username = '$Username' ";
$resultt = mysqli_query($conn, $sqll);
$roww = mysqli_fetch_array($resultt);
?>

<?php include('S-head.php');?>

<div class="container text-center">
    <h2>รายละเอียดคำสั่งซื้อ</h2>
</div>
<h2>          </h2>

<div class="container">
    <div class="card">
        <div class="card-body">

            <h4>เลขที่สั่งซื้อ  <?=$Order_No; ?></h4>
            <table class="table table-hover text-center">
            <thead>
                    <tr>
                    <th scope="col">รหัสสินค้า</th>
                    <th scope="col">ชื่อสินค้า</th>
                    <th scope="col">ราคา/หน่วย</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">วันที่ทำรายการ</th>
                    </tr>
                </thead>
<?php 

$sql2 = "SELECT * FROM order_cart AS c INNER JOIN order_cart_detail AS d ON (c.Order_No=d.Order_No)
INNER JOIN product_info AS p ON (d.PD_NO=p.PD_NO) AND d.Order_No='$Order_No' ";
$result2=mysqli_query($conn,$sql2);
$sum_total=0;
while($row=mysqli_fetch_array($result2)){
$sum_total=$row['price_total'];
?>

<tbody>
            <td><?php echo $row['PD_NO']; ?></td>
            <td><?php echo $row['PD_Name']; ?></td>
            <td><?php echo $row['PD_Price']; ?></td>
            <td><?php echo $row['QTY']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
<?php } ?>         
</tbody>
    </table>
            <b>ราคารวมสุทธิ : <?=$sum_total?></b>
        </div>
    </div>
</div>

<?php

$sql3 = "SELECT * FROM order_cart WHERE Order_No= '$_REQUEST[Order_No]' ";
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($result3);
$StatusNo=$row3['StatusNo'];

?>


<div class="py-5">
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <h4>รายละเอียดสถานะคำสั่งซื้อ
            </h4> <hr>
            <div class="row">

            <label for="inputcart_edit_name" class="col-sm-6 form-label">เลขที่สั่งซื้อ :
                <input class="form-control" type="number" name="Order_No" id="Order_No" value="<?php echo $row3['Order_No']; ?>" readonly>
            </label>

            <label for="inputcart_edit_name" class="col-sm-6 form-label">สถานะคำสั่งซื้อ :
                <input class="form-control" type="text" name="StatusNo" id="StatusNo" value="<?php 
                if($StatusNo==1){
                    echo "รอชำระเงิน";
                }elseif($StatusNo==2){
                    echo "ชำระเงินเรียบร้อย";
                }elseif($StatusNo==3){
                    echo "รับสินค้าเรียบร้อย";
                }elseif($StatusNo==4){
                    echo "ยกเลิกคำสั่งซื้อ";
                }elseif($StatusNo==5){
                    echo "รอดำเนินการ";
                }
            ?>" readonly>
            </label>
<br>
<br>
<br>
            <label for="inputorder_ss" class="col-sm-6 form-label">วันรับสินค้า :
                <input class="form-control" type="date" name="order_ss" id="order_ss" value="<?php echo $row3['order_ss']; ?>" readonly>
            </label>

            </div>

          </div>

    <?php
        $sql5 = "SELECT * FROM order_cart_detail WHERE Order_No= '$_REQUEST[Order_No]' ";
        $result5=mysqli_query($conn,$sql5);
        $row5=mysqli_fetch_array($result5);
        $payment_slip=$row5['payment_slip'];
    ?>
          
          <div class="col-md-5">
            <div class="row-align-center">
              <h4>หลักฐานการชำระเงิน</h4><hr>
      <?php if($payment_slip == "") { ?>

        <b style='color:red' >ไม่มีการแนบหลักฐานการชำระเงิน</b>

      <?php }else{ ?>

            <img src="backend/fileupload/slip/<?=$row5['payment_slip']; ?>" width="260px" height="200px" class="img-thumbnail">
            </div>
<?php } ?>

<br><h1></h1>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" type="cancel" value="ยกเลิก" href="S-history.php">ย้อนกลับ</a>
        </div>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<br>
<br>
<br>
<br>

<br>
<br>
<?php include('footer.php');?>