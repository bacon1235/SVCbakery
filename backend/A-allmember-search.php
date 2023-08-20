<title>ค้นหารายชื่อสมาชิก</title>

<?php include('Connect.php');
$word = $_POST["word"];
$sql = "SELECT * FROM allmember WHERE Username LIKE '%$word%' OR RoleID LIKE '%$word%' ORDER BY Username ASC ";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result); 
$order = 1;
?>
<?php include('A-head.php');?>

<div class="container">
  <h2>รายชื่อสมาชิก</h2>
  <table>

      <td><a type="button" class="btn btn-dark" href="A-allmember-add.php">เพิ่มสมาชิก</a></td>
        <form name="fsearch" method="post" action="A-allmember-search.php">
          <div class="row height d-flex justify-content-end align-items-end">
              <div class="col-md-3">
          <div class="search">
            <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
              <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
              <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
          </div>
              </div>
          </div> 
        </form>

    <?php if ($count > 0) { ?>

  </table>

    <h2>          </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ชื่อผู้ใช้</th>
          <th scope="col">ชื่อ-นามสกุล</th>
          <th scope="col">ตำแหน่ง</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>

<tbody>
<?php while ($row = mysqli_fetch_array($result)) { $RoleID=$row['RoleID'] ?>
  <tr>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['Firstname']; echo $row['Surname']; ?></td>
            <td>
                <?php 
                      if($RoleID==1){
                          echo "<b>นักเรียน นักศึกษา</b>";
                      }elseif($RoleID==2){
                          echo "<b>คุณครู อาจารย์</b>";
                      }elseif($RoleID==3){
                          echo "<b>ผู้ดูแลระบบ</b>";
                      }
                  ?>
            </td>
            <td><a type="button" class="btn btn-warning" href="A-allmemberedit.php?Username=<?=$row['Username']?>">ดูรายละเอียด</a></td>
            <td><a type="button" class="btn btn-danger" href="A-allmemberdelete.php?Username=<?=$row['Username']?>">ลบ</a></td>
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
            <a class="btn btn-danger"href="A-allmember-list.php">ย้อนกลับ</a>
    </div>

</div>

<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php');?>


