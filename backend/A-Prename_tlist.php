<title>รายการคำนำหน้า</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>รายการคำนำหน้า</h2>
    <a type="button" class="btn btn-dark" href="A-Prename_tadd.php">เพิ่มคำนำหน้า</a>

    <table class="table history-s text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">คำนำหน้า</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM Prename_T";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

      <tbody>
            <td><?php echo $row['PrenameID']; ?></td>
            <td><?php echo $row['Prename']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Prename_tedit.php?PrenameID=<?=$row['PrenameID']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Prename_tdelete.php?PrenameID=<?=$row['PrenameID']?>">ลบ</a></td>
      </tbody>

<?php } ?>

<?php include('footer.php');?>
    </table>
</div>

