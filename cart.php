<title>รายการคำสั่งซื้อ</title>

<?php
    session_start();
    include('Connect.php');
    include('S-head.php');
    include('req_login.php');
    //เช็คแล้ว
    /*isset( $_GET['PD_No'] ) ? $PD_No = $_GET['PD_No'] : $PD_No = "";
    $sql5="SELECT * FROM Product_Info WHERE PD_No='$PD_No' ";
    $result5=mysqli_query($conn, $sql5);
    $row5=mysqli_fetch_array($result5);*/
    //เช็คแล้ว
    $sqll = "SELECT * FROM allmember WHERE Username = '".$_SESSION['Username']."' ";
    $resultt = mysqli_query($conn, $sqll);
    $roww = mysqli_fetch_array($resultt);
?>

<div class="container">
    <h2>รายการคำสั่งซื้อ</h2>

<div class="container">
    <form name="order_cart" method="post" action="cart_insert.php" enctype="multipart/form-data" >
        <div class="row">
            <div class="col-md-15">
                <table class="table table-striped table-bordered table-hover text-center">
                <thead>
                <tr>
                <th scope="col">ลำดับ</th>
                <th scope="col">รูปภาพ</th>
                <th scope="col">ชื่อสินค้า</th>
                <th scope="col">ราคา</th>
                <th scope="col">จำนวน</th>
                <th scope="col">ราคารวม</th>
                <th scope="col">เพิ่ม - ลด</th>
                <th scope="col">ลบ</th>
                </tr>
            </thead>

<?php
//เช็คแล้ว
$total = 0;
$sumPrice = 0;
$m = 1;

if(isset($_SESSION["intLine"])) {

for($i=0; $i <=(int)$_SESSION["intLine"]; $i++) { 
    if(($_SESSION["strProductID"][$i]) != ""){
        $sql1="SELECT * FROM Product_Info WHERE PD_No= '" . $_SESSION["strProductID"][$i] . "' ";
        $result1=mysqli_query($conn,$sql1);
        $row_pro=mysqli_fetch_array($result1);
//ตัวแปรSession
        $_SESSION["PD_Price"] = $row_pro['PD_Price'];
        $Total = $_SESSION["strQty"][$i];
        $sum = $Total*$row_pro['PD_Price'];
        $sumPrice =$sumPrice + $sum;
        $_SESSION["sum_Price"] = $sumPrice;
        //sum = จำนวนสินค้า*ราคาของชิ้นนั้น sumPrice=ยอดรวมทั้งหมด
?>

            <tbody>
                <td><?=$m?></td>
                <td><img src="backend/fileupload/img/<?=$row_pro['PD_Pic']; ?>" width="65" height="50"></td>
                <td><?=$row_pro['PD_Name']?></td>
                <td><?=$row_pro["PD_Price"]?></td>
                <td><?=$_SESSION["strQty"][$i]?></td>
                <td><?=$sum?></td>
                <td>
                    <a href="order.php?PD_No=<?=$row_pro['PD_No']?>" class="btn btn-outline-primary">+</a>

                    <?php if($_SESSION["strQty"][$i] > 1) { ?>    
                        <a href="orderdel.php?PD_No=<?=$row_pro['PD_No']?>" class="btn btn-outline-primary">-</a>
                    <?php } ?> 

                </td>
                <td>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a class="btn btn-danger" href="cart_delete.php?Line=<?=$i?>"> 
                    <i class="fa fa-trash me-2"></i>ลบ</a>
                </div>
            
            </td>
            </tbody>
<?php     
    $m=$m+1;
    }}} 
    ?>

                <tr>
                    <td class="text-center" colspan="6">รวมเป็นเงิน</td>
                    <td><?=$sumPrice?></td>
                    <td>บาท</td>
                </tr>
                </table>
<div style="text-align: right;">
    <a href="S-index.php"><button type="button" class="btn btn-warning">เลือกสินค้าเพิ่ม</button></a>
    <button type="submit" value="submit" class="btn btn-success">ยืนยันการสั่งซื้อ</button>
</div>
            </div>
        </div>

<div class="py-5">
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <h4>การชำระเงิน</h4> <hr>
            <div class="row">

            <h5>เลือกวิธีการชำระเงิน</h5>
                <label for="inputPaymentID" class="col-sm-4 form-label">วิธีการชำระเงิน :
                    <select class="form-select" name="PaymentID" id="PaymentID" aria-label="Default select example">
                            <?php
                                $sql4="SELECT * FROM payment_t ";
                                $qr=mysqli_query($conn,$sql4);
                                while($rs=mysqli_fetch_array($qr)){
                            ?>
                    <option value="<?=$rs['PaymentName']?>"><?=$rs['PaymentName']?></option>
                            <?php } ?>    
                    </select>
                    <p>*กรณีเลือกชำระเงินเป็นเงินสด ให้กรอกเพียงแค่วันที่ทำรายการเท่านั้น*</p>
                </label>

            </div>

          </div>

<?php

        $sql2 = "SELECT * FROM bank_info";
        $result2=mysqli_query($conn,$sql2);
        while($row=mysqli_fetch_array($result2)){ ?>
          
          <div class="col-md-5">
            <div class="row-align-center">
              <h4>การชำระเงินผ่านธนาคาร</h4><hr>
                <h6><?php echo $row['BankName']; ?> : <?php echo $row['BankNumber']; ?></h6>
                <h6>ชื่อบัญชี : <?php echo $row['BankOwner']; ?></h6>
                <h6>ชื่อผู้สั่งซื้อ : <input type="text" class="form-control" name="Username" value="<?php echo $roww['Username']; ?>" readonly></h6>
              <h6>หลักฐานการชำระเงิน :<input type="file" class="form-control" name="payment_slip"></h6>
              <h6>วันที่ทำรายการ : <input type="date" class="form-control" name="order_date" require></h6>

                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>