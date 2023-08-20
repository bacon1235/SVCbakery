<title>รายการประเภทสินค้า</title>
<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>รายการประเภทสินค้า</h2>
    <a type="button" class="btn btn-dark" href="A-Goods_Tadd.php">เพิ่มประเภทสินค้า</a>

    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">รหัสประเภทสินค้า</th>
          <th scope="col">ประเภทสินค้า</th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM goods_t";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

      <tbody>
            <td><?php echo $row['typeID']; ?></td>
            <td><?php echo $row['typeName']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Goods_Tedit.php?typeID=<?=$row['typeID']?>">แก้ไข</a></td>
      </tbody>

<?php } ?>

<?php include('footer.php');?>
    </table>
</div>

