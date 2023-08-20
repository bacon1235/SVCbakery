<title>รายการแผนกวิชา</title>

<?php include('Connect.php');?>
<?php include('A-head.php');?>

<div class="container">
    <h2>รายการแผนกวิชา</h2>
    <a type="button" class="btn btn-dark" href="A-Department_Infoadd.php">เพิ่มแผนกวิชา</a>

    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">แผนกวิชา</th>
          <th scope="col">ประเภทแผนกวิชา</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM department_info";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

<tbody>
            <td><?php echo $row['DepartmentID']; ?></td>
            <td><?php echo $row['DepartmentName']; ?></td>
            <td><?php echo $row['Department_TID']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Department_Infoedit.php?DepartmentID=<?=$row['DepartmentID']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Department_Infodelete.php?DepartmentID=<?=$row['DepartmentID']?>">ลบ</a></td>
      </tbody>

<?php } ?>

</table>
</div>

<br>
<br>
<?php include('footer.php');?>


