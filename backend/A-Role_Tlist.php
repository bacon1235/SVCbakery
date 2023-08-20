<title>รายการประเภทตำแหน่ง</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>รายการประเภทตำแหน่ง</h2>
    <a type="button" class="btn btn-dark" href="A-Role_TAdd.php">เพิ่มประเภทตำแหน่ง</a>

    <table class="table history-s text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ประเภทตำแหน่ง</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM role_t";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

      <tbody>
            <td><?php echo $row['RoleID']; ?></td>
            <td><?php echo $row['RoleName']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Role_Tedit.php?RoleID=<?=$row['RoleID']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Role_Tdelete.php?RoleID=<?=$row['RoleID']?>">ลบ</a></td>
      </tbody>

<?php } ?>

<?php include('footer.php');?>
    </table>
</div>

