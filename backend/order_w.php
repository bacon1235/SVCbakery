<title>คำสั่งซื้อที่รอดำเนินการ</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>
<?php
 $perpage = 10;
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
 }
 
 $start = ($page - 1) * $perpage;
 
 $sql3 = "SELECT * FROM order_cart WHERE StatusNo='4' ORDER BY Order_NO DESC limit {$start} , {$perpage} ";
 $result3 = mysqli_query($conn, $sql3);
 ?>

<div class="container">
    <h2>คำสั่งซื้อที่รอดำเนินการ</h2>

<table>

<td><a type="button" class="btn btn-primary" href="order_pending.php">รอชำระเงิน</a></td>
<td>      </td>
<td><a type="button" class="btn btn-info" href="order_ss.php">ชำระเงินเรียบร้อย</a></td>
<td>      </td>
<td><a type="button" class="btn btn-success" href="order_end.php">รับสินค้าเรียบร้อย</a></td>
<td>      </td>
  <form name="fsearch" method="post" action="A-manageorderSearch.php">
    <div class="row height d-flex justify-content-end align-items-end">
        <div class="col-md-3">
    <div class="search">
      <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
        <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
        <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
    </div>
        </div>
    </div> 
  </form>
</table>

<h2>          </h2>

    <table class="table table-hover text-center">
      <thead>
        <tr>
        <th scope="col">เลขที่สั่งซื้อ</th>
          <th scope="col">ชื่อผู้สั่ง</th>
          <th scope="col">ราคารวมสุทธิ</th>
          <th scope="col">การชำระเงิน</th>
          <th scope="col">สถานะคำสั่งซื้อ</th>
          <th scope="col">ผู้บันทึกข้อมูล</th>
          <!--<th scope="col">วันรับสินค้า</th>-->
          <th scope="col">จัดการ</th>

        </tr>
      </thead>

<?php 

while ($row = mysqli_fetch_assoc($result3)) {
$StatusNo=$row['StatusNo']
?>

<tbody>
            <td><?php echo $row['Order_No']; ?></td>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['price_total']; ?></td>
            <td><?php echo $row['PaymentID']; ?></td>
            <td><?php 
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
            <td><?php echo $row['cart_edit_name']; ?></td>
            
            <td><a type="button" class="btn btn-warning" href="order_detail.php?Order_No=<?=$row['Order_No']?>" onclick="return confirm('คุณต้องการจัดการคำสั่งซื้อหรือไม่');">จัดการ</a></td>
      </tbody>
<?php } ?>

<?php
 $sql2 = "SELECT * FROM order_cart WHERE StatusNo='4' ";
 $query2 = mysqli_query($conn, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>

</table>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
    <a class="page-link text-dark" href="order_w.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>

    <li class="page-link text-dark"><a class="text-dark" href="order_w.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
    <li class="page-link text-dark">
    <a class="text-dark" href="order_w.php?page=<?php echo $total_page;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>





<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>
