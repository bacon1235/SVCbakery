<title>รายการคำถามที่พบบ่อย</title>

<?php     
    session_start();
    include('Connect.php');
    include('req_login.php');
    include('A-head.php');?>


<div class="container">
    <h2>รายการคำถามที่พบบ่อย</h2>
    <a type="button" class="btn btn-dark" href="A-Quest_Infoadd.php">เพิ่มคำถาม</a>
    <h1>             </h1>

    <table class="table table-striped table-bordered table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ลำดับ</th>
          <th scope="col">คำถาม</th>
          <th scope="col">คำตอบ</th>
          <th scope="col">   </th>
          <th scope="col">   </th>
        </tr>
      </thead>
  
    <?php 

        $sql = "SELECT * FROM Quest_Info";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

    ?>

<tbody>
            <td><?php echo $row['QNo']; ?></td>
            <td><?php echo $row['Quest']; ?></td>
            <td><?php echo $row['Answer']; ?></td>
            <td><a type="button" class="btn btn-warning" href="A-Quest_Infoedit.php?QNo=<?=$row['QNo']?>">แก้ไข</a></td>
            <td><a type="button" class="btn btn-danger" href="A-Quest_Infodelete.php?QNo=<?=$row['QNo']?>" onclick="return confirm('ยืนยันการลบข้อมูล');">ลบ</a></td>
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