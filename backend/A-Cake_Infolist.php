<title>รายการสินค้าประเภทเค้ก</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>รายการสินค้าประเภทเค้ก</h2>
    <a type="button" class="btn btn-dark" href="A-Cake_Infoadd.php">เพิ่มสินค้า</a>
    <h2>          </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ประเภทสินค้า</th>
          <th scope="col">รูปภาพสินค้า</th>
          <th scope="col">ชื่อสินค้า</th>
          <th scope="col">รายละเอียดสินค้า</th>
          <th scope="col">ราคา/ปอนด์</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM Cake_Info";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

<tbody>
            <td><?php echo $row['CakeID']; ?></td>
            <td><?php echo $row['typeName']; ?></td>
            <td><img src="<?php echo $row['Cake_Pic']; ?>" width="130px" height="100px" alt=""></td>
            <td><?php echo $row['Cake_Name']; ?></td>
            <td><?php echo $row['Cake_Detail']; ?></td>
            <td><?php echo $row['Cake_Price']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Cake_Infoedit.php?CakeID=<?=$row['CakeID']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Cake_Infodelete.php?CakeID=<?=$row['CakeID']?>">ลบ</a></td>
      </tbody>

<?php } ?>

</table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>


