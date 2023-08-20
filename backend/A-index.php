<title>หน้าแรก</title>
<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');

//คำสั่งซื้อที่รอดำเนินการ
$sql="SELECT COUNT(Order_NO) AS order_w FROM order_cart WHERE StatusNo='4' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

//คำสั่งซื้อที่รับสินค้าเรียบร้อย
$sql2="SELECT COUNT(Order_NO) AS order_end FROM order_cart WHERE StatusNo='3' ";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);

//คำสั่งซื้อชำระเงินแล้ว
$sql3="SELECT COUNT(Order_NO) AS order_ss FROM order_cart WHERE StatusNo='2' ";
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($result3);

//คำสั่งซื้อทั้งหมด
$sql4="SELECT COUNT(Order_NO) AS order_total FROM order_cart WHERE Order_NO=Order_NO ";
$result4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_array($result4);

?>

<div class="container">
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">รายงานคำสั่งซื้อ</h3>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">คำสั่งซื้อทั้งหมด<h4>[<?=$row4['order_total'] ?>]</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="A-manageorder.php">ดูรายละเอียด</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">คำสั่งซื้อที่รอดำเนินการ<h4>[<?=$row['order_w'] ?>]</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="order_w.php">ดูรายละเอียด</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">รับสินค้าเรียบร้อย<h4>[<?=$row2['order_end'] ?>]</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="order_end.php">ดูรายละเอียด</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">ชำระเงินเรียบร้อย<h4>[<?=$row3['order_ss'] ?>]</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="order_ss.php">ดูรายละเอียด</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<h3>อันดับสินค้าที่มีการสั่งซื้อมากที่สุด</h3>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">รหัสสินค้า</th>
          <th scope="col">จำนวน</th>
        </tr>
      </thead>
  
    <?php 

        $sql8 ="SELECT PD_NO, SUM(QTY) FROM order_cart_detail Group BY PD_NO ORDER BY SUM(QTY) DESC";
        $result8=mysqli_query($conn,$sql8);
        while($row8=mysqli_fetch_array($result8)){

    ?>

      <tbody>
            <td><?php echo $row8['PD_NO']; ?></td>
            <td><?php echo $row8['SUM(QTY)']; ?></td>
        
      </tbody>

            <?php } ?>
            </table>


<h3>อันดับยอดสั่งซื้อ</h3>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ชื่อผู้ใช้</th>
          <th scope="col">รวมยอดสั่งซื้อ</th>
          <th scope="col">ดูรายละเอียด</th>
        </tr>
      </thead>
  
    <?php 

        $sql ="SELECT Username, SUM(price_total) FROM order_cart WHERE StatusNo = 4 Group BY Username ORDER BY SUM(price_total) DESC";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

      <tbody>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['SUM(price_total)']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-bestsale.php?Username=<?=$row['Username']?>">ดูรายละเอียด</a></td>
      </tbody>

            <?php } ?>
            </table>
        </div>
    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>
