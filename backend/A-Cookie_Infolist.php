<title>รายการสินค้าประเภทคุกกี้เนยสด</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>รายการสินค้าประเภทคุกกี้เนยสด</h2>
    <a type="button" class="btn btn-dark" href="A-Cookie_Infoadd.php">เพิ่มสินค้า</a>
    <h2>          </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ประเภทสินค้า</th>
          <th scope="col">รูปภาพสินค้า</th>
          <th scope="col">ชื่อสินค้า</th>
          <th scope="col">ขนาดสินค้า</th>
          <th scope="col">รายละเอียดสินค้า</th>
          <th scope="col">ราคา</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM Cookie_Info";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

<tbody>
            <td><?php echo $row['CookieNo']; ?></td>
            <td><?php echo $row['typeID']; ?></td>
            <td><img src="<?php echo $row['Cookie_Pic']; ?>" width="130px" height="100px" alt=""></td>
            <td><?php echo $row['Cookie_Name']; ?></td>
            <td><?php echo $row['Cookie_Size']; ?></td>
            <td><?php echo $row['Cookie_Detail']; ?></td>
            <td><?php echo $row['Cookie_Price']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Cookie_Infoedit.php?CookieNo=<?=$row['CookieNo']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Cookie_Infodelete.php?CookieNo=<?=$row['CookieNo']?>">ลบ</a></td>
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


