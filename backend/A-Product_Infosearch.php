<title>รายการค้นหาสินค้า</title>

<?php include('Connect.php');
$word = $_POST["word"];
$sql = "SELECT * FROM Product_Info WHERE PD_Name LIKE '%$word%' OR typeName LIKE '%$word%' ORDER BY PD_NO ASC ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); 
$order = 1;
?>
<?php include('A-head.php');?>

<div class="container">
  <h2>รายการค้นหาสินค้า</h2>
  <table>

      <td><a type="button" class="btn btn-dark" href="A-Product_Infoadd.php">เพิ่มสินค้า</a></td>
      <td><a type="button" class="btn btn-dark" href="A-Goods_Tadd.php">เพิ่มประเภทสินค้า</a></td>
        <form name="fsearch" method="post" action="A-Product_Infosearch.php">
          <div class="row height d-flex justify-content-end align-items-end">
              <div class="col-md-3">
          <div class="search">
            <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
              <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
              <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
                </div>
              </div>
          </div> 
        </form>
  </table>

    <h2>          </h2>
    <?php if ($count > 0) { ?>
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
          <th scope="col">   </th>
        </tr>
      </thead>

<tbody>
  <?php while ($row = mysqli_fetch_assoc($result)) {
      $discount=$row['discount'];
      $rs_discount=$row['PD_Price']*(100-5)/100;
  ?>
    <tr>

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
            <td><a type="button" class="btn btn-danger" href="A-Product_Infodelete.php?PD_No=<?=$row['PD_No']?>">ลบ</a></td>
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
            <a class="btn btn-danger"href="A-Product_Infolist.php">ย้อนกลับ</a>
        </div>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>


