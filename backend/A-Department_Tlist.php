<title>รายการประเภทแผนกวิชา</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>รายการประเภทแผนกวิชา</h2>
    <a type="button" class="btn btn-dark" href="A-Department_Tadd.php">เพิ่มประเภทแผนกวิชา</a>

    <table class="table history-s text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับประเภทแผนกวิชา</th>
          <th scope="col">ประเภทแผนกวิชา</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM department_t";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

      <tbody>
            <td><?php echo $row['Department_TID']; ?></td>
            <td><?php echo $row['Department_TName']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Department_Tedit.php?Department_TID=<?=$row['Department_TID']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Department_Tdelete.php?Department_TID=<?=$row['Department_TID']?>">ลบ</a></td>
      </tbody>

<?php } ?>

<?php include('footer.php');?>
    </table>
</div>

