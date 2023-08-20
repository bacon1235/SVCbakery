<title>รายการสินค้า</title>
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
 
 $sql = "SELECT * FROM Product_Info limit {$start} , {$perpage} ";
 $result = mysqli_query($conn, $sql);
 ?>

<div class="container">
  <h2>รายการสินค้า</h2>
  <table>

      <td><a type="button" class="btn btn-dark" href="A-Product_Infoadd.php">เพิ่มสินค้า</a></td>
      <td><a type="button" class="btn btn-dark" href="A-Goods_Tlist.php">ประเภทสินค้า</a></td>
        <form name="fsearch" method="post" action="A-Product_Infosearch.php">
          <div class="row height d-flex justify-content-end align-items-end">
              <div class="col-md-3">
          <div class="search">
            <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
              <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
              <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
          </div>
              </div>
          </div> 
        </form>
  </table>

    <h2>          </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">รูปภาพ</th>
          <th scope="col">ชื่อ</th>
          <th scope="col">ประเภท</th>
          <th scope="col">รายละเอียด</th>
          <th scope="col">จำนวน</th>
          <th scope="col">ราคา</th>
          <th scope="col">ส่วนลด</th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
<?php 

while ($row = mysqli_fetch_assoc($result)) {
  $discount=$row['discount'];
  $rs_discount=$row['PD_Price']*(100-$discount)/100;

?>

<tbody>
            <td><?php echo $row['PD_No']; ?></td>
            <td><img src="<?php echo $row['PD_Pic']; ?>" width="130px" height="100px" alt=""></td>
            <td><?php echo $row['PD_Name']; ?></td>
            <td><?php echo $row['typeName']; ?></td>
            <td><?php echo $row['PD_Detail']; ?></td>
            <td><?php echo $row['PD_amount']; ?></td>
            <td>
                <?php 
                      if($discount < 1){
                          echo $row['PD_Price']; 
                      }elseif($discount > 1){
                          echo "<p><del>$row[PD_Price]</del></p>";
                          echo "<b style='color:red'>$rs_discount</b>";
                      }
                  ?>
          </td>
            <td><?php echo $row['discount']; ?>%</td>
            <td><a type="button" class="btn btn-warning" href="A-Product_Infoedit.php?PD_No=<?=$row['PD_No']?>">แก้ไข</a></td>
      </tbody>

<?php } ?>

<?php
 $sql2 = "SELECT * FROM Product_Info ";
 $query2 = mysqli_query($conn, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>

</table>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
    <a class="page-link text-dark" href="A-Product_Infolist.php?page=1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>

    <li class="page-link text-dark"><a class="text-dark" href="A-Product_Infolist.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php } ?>
    <li class="page-link text-dark">
    <a class="text-dark" href="A-Product_Infolist.php?page=<?php echo $total_page;?>" aria-label="Next">
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


