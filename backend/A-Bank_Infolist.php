<title>รายการธนาคาร</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>

<div class="container">
    <h2>รายการธนาคาร</h2>

  <table> 
    <td><a type="button" class="btn btn-dark" href="A-Bank_Infoadd.php">เพิ่มธนาคาร</a></td>
    <td><a type="button" class="btn btn-dark" href="A-Payment_Tlist.php">ประเภทการชำระเงิน</a></td>

    <form name="fsearch" method="post" action="A-Bank_Infosearch.php">
          <div class="row height d-flex justify-content-end align-items-end">
              <div class="col-md-3">
          <div class="search">
            <td>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</td>
              <td><input type="text" class="form-control" name="word" placeholder="ป้อนคำค้นหา" require autofocus></td>
              <td><button class="btn btn-dark" type="submit" name="submit">ค้นหา</button></td>
          </div>
              </div>
          </div> 
        </form>

  </table>   
    <h2>         </h2>
    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">ชื่อธนาคาร</th>
          <th scope="col">เลขบัญชี</th>
          <th scope="col">ชื่อบัญชี</th>
          <th scope="col">วันที่เพิ่มข้อมูล</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM Bank_Info";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

<tbody>
            <td><?php echo $row['BankNo']; ?></td>
            <td><?php echo $row['BankName']; ?></td>
            <td><?php echo $row['BankNumber']; ?></td>
            <td><?php echo $row['BankOwner']; ?></td>
            <td><?php echo $row['BankDate']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Bank_Infoedit.php?BankNo=<?=$row['BankNo']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Bank_Infodelete.php?BankNo=<?=$row['BankNo']?>" onclick="return confirm('ยืนยันการลบข้อมูล');">ลบ</a></td>
      </tbody>

<?php } ?>

</table>
</div>

<br>
<br>
<?php include('footer.php');?>


