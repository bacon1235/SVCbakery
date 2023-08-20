<title>รายชื่อสมาชิก</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php'); ?>

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
  </table>

    <h2>          </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ชื่อผู้ใช้</th>
          <th scope="col">ชื่อ-นามสกุล</th>
          <th scope="col">ตำแหน่ง</th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM allmember";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
          $RoleID=$row['RoleID']

    ?>

<tbody>
            <td><?php echo $row['Username']; ?></td>
            <td><?php echo $row['Firstname']; ?> <?php echo $row['Surname']; ?> </td>
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


